<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => '/development'], function () {

    Route::get('/', function () {
        return 'api test';
    });

    Route::middleware('api') ->group(base_path('routes/api/auth.php'));

    Route::namespace('Web')->group(base_path('routes/api/guest.php'));

    Route::prefix('panel')->middleware('api.auth')->namespace('Panel')->group(base_path('routes/api/user.php'));

    Route::group(['namespace' => 'Config', 'middleware' => []], function () {
        Route::get('/config', ['uses' => 'ConfigController@list']);
        Route::get('/config/register/{type}', ['uses' => 'ConfigController@getRegisterConfig']);
    });

    Route::prefix('instructor')->middleware(['api.auth', 'api.level-access:teacher'])->namespace('Instructor')->group(base_path('routes/api/instructor.php'));

    Route::post('/clickuz/paymentOrder', [App\Http\Controllers\Web\PaymentController::class, 'paymentOrder'])->name('clickuz.paymentOrder');
    Route::post('/clickuz/prepare', [App\Http\Controllers\ClickUzController::class, 'prepare']);
    Route::post('/clickuz/complete', [App\Http\Controllers\ClickUzController::class, 'complete']);
    Route::get('/clickuz/callback', [App\Http\Controllers\ClickUzController::class, 'callback'])->name('clickuz.callback');
});
