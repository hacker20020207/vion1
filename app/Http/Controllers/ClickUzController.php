<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Web\PaymentController;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PaymentChannel;
use App\Models\ReserveMeeting;
use App\PaymentChannels\ChannelManager;
use Illuminate\Http\Request;
use App\Models\ClickUz;

class ClickUzController extends Controller
{
    public function prepare(Request $request)
    {
        $data = $request->all();
        $secretKey = config('clickuz.provider.click.secret_key');
        $generatedSignString = md5(
            "{$data['click_trans_id']}{$data['service_id']}{$secretKey}{$data['merchant_trans_id']}{$data['amount']}{$data['action']}{$data['sign_time']}"
        );
//        return response()->json(['click'=>$generatedSignString]);
        if ($data['sign_string'] !== $generatedSignString) {
            return response()->json(['error' => -1, 'error_note' => 'SIGN CHECK FAILED!']);
        }
        if (cache()->has('clickOrderId')) {
            cache()->forget('clickOrderId'); // Eski qiymatni o‘chirib tashlash
        }
        $clickOrderId = cache()->remember('clickOrderId', 3600, function () use ($data) {
            return $data['merchant_trans_id'];
        });
        ClickUz::create([
            'click_trans_id' => $data['click_trans_id'],
            'payment_id'    => $data['click_paydoc_id'],
            'merchant_trans_id' => $data['merchant_trans_id'],
            'amount' => $data['amount'],
            'sign_time' => $data['sign_time'],
            'situation' => $data['error']
        ]);
        Order::where('id', $data['merchant_trans_id'])->update(['status' => 'paying']);

        return response()->json([
            'click_trans_id' => $data['click_trans_id'],
            'merchant_trans_id' => $data['merchant_trans_id'],
            'merchant_prepare_id' => $data['merchant_trans_id'],
            'error' => $data['error'] == 0 ? 0 : -9,
            'error_note' => $data['error'] == 0 ? 'Success' : 'Transaction cancelled',
        ]);
    }
    public function complete(Request $request)
    {
        $data = $request->all();
        $secretKey = config('clickuz.provider.click.secret_key');
        $generatedSignString = md5(
            "{$data['click_trans_id']}{$data['service_id']}{$secretKey}{$data['merchant_trans_id']}{$data['merchant_prepare_id']}{$data['amount']}{$data['action']}{$data['sign_time']}"
        );
//        return response()->json(['click'=>$generatedSignString]);

        if ($data['sign_string'] !== $generatedSignString) {
            return response()->json(['error' => -1, 'error_note' => 'SIGN CHECK FAILED!']);
        }
        ClickUz::where('click_trans_id', $data['click_trans_id'])->update([
            'situation' => $data['error']==0 ? 1 : -9,
            'status' => $data['error']==0 ? 'success' : 'Transaction cancelled'
        ]);
        $paymentController = (new PaymentController())->callback($data['merchant_trans_id']);
//        Order::where('id', $data['merchant_trans_id'])->update(['status' => 'paid']);
        return response()->json([
            'click_trans_id' => $data['click_trans_id'],
            'merchant_trans_id' => $data['merchant_trans_id'],
            'merchant_confirm_id' => $data['merchant_trans_id'],
            'error' => $data['error']==0 ? 0 : -9,
            'error_note' => $data['error']==0 ? 'Success' : 'Transaction cancelled'
        ]);
    }

    public function generateClickUrl($order_id = 1, $orderTotal = 1000): string
    {
        $serviceId = config('clickuz.provider.click.service_id');
        $merchantId = config('clickuz.provider.click.merchant_id');
        $return_url = route('clickuz.callback');
        return config('clickuz.provider.endpoint') . "?service_id={$serviceId}&merchant_id={$merchantId}&amount={$orderTotal}&transaction_param={$order_id}&return_url={$return_url}";
    }

    public function callback(Request $request)
    {
        if ($request->has('payment_id')){
            $order_id = ClickUz::where('payment_id', $request->get('payment_id'))->first()->merchant_trans_id;
        }
        if ($order_id){
            $order = Order::find($order_id);
            if (!empty($order)) {
                $data = [
                    'pageTitle' => trans('public.cart_page_title'),
                    'order' => $order,
                ];

                return view('web.default.cart.status_pay', $data);
            }
        }
        return redirect('/panel');
//        return (new PaymentController())->callback(cache()->get('clickOrderId'));
    }
}
