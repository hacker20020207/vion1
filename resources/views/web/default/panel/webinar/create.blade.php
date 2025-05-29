@extends(getTemplate() .'.panel.layouts.panel_layout')

@push('styles_top')
    <link href="{{asset('assets/libs/spectrum-colorpicker2/spectrum.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <style>
        span.input-group-text, .clockpicker-tick, .clockpicker-button {
            background-color: lightblue !important;
        }
        .clockpicker-popover .popover-content{
            box-shadow: 2px 14px 14px;
        }
        .btn-success{
            background-color: forestgreen !important;
            border: 1px solid forestgreen;
        }
        .btn-danger{
            background-color: red !important;
            border: 1px solid red;
        }
        .btn-success, .btn-danger{
            margin-left: 2px;
            align-items: center;
            padding: 0.5rem 1rem;
            margin-bottom: 0;
            font-size: 0.75rem;
            font-weight: 400;
            line-height: 1.25;
            text-align: center;
            white-space: nowrap;
            border-radius: 0.5rem;
        }
        .opacity_content label, .opacity_content input, .opacity_content select, .opacity_content .input-group-text{
            opacity:0.4 !important;
        }
    </style>
@endpush

@section('content')
    <div class="">
        <form method="post" action="/panel/webinars/{{ !empty($webinar) ? $webinar->id .'/update' : 'store' }}" id="webinarForm" class="webinar-form" enctype="multipart/form-data">
            @include('web.default.panel.webinar.create_includes.progress')

            {{ csrf_field() }}
            <input type="hidden" name="current_step" value="{{ !empty($currentStep) ? $currentStep : 1 }}">
            <input type="hidden" name="draft" value="no" id="forDraft"/>
            <input type="hidden" name="get_next" value="no" id="getNext"/>
            <input type="hidden" name="get_step" value="0" id="getStep"/>


            @if($currentStep == 1)
                @include('web.default.panel.webinar.create_includes.step_1')
            @elseif(!empty($webinar))
                @include('web.default.panel.webinar.create_includes.step_'.$currentStep)
            @endif

        </form>
        <div class="create-webinar-footer d-flex flex-column flex-md-row align-items-center justify-content-between mt-20 pt-15 border-top">
            <div class="d-flex align-items-center">

                @if(!empty($webinar))
                    <a href="/panel/webinars/{{ $webinar->id }}/step/{{ ($currentStep - 1) }}" class="btn btn-sm btn-primary {{ $currentStep < 2 ? 'disabled' : '' }}">{{ trans('webinars.previous') }}</a>
                @else
                    <a href="" class="btn btn-sm btn-primary disabled">{{ trans('webinars.previous') }}</a>
                @endif

                <button type="button" id="getNextStep" class="btn btn-sm btn-primary ml-15" @if($currentStep >= $stepCount) disabled @endif>{{ trans('webinars.next') }}</button>
            </div>

            <div class="mt-20 mt-md-0">
                <button type="button" id="sendForReview" class="btn btn-sm btn-primary">{{ !empty(getGeneralOptionsSettings('direct_publication_of_courses')) ? trans('update.publish') : trans('public.send_for_review') }}</button>

                <button type="button" id="saveAsDraft" class=" btn btn-sm btn-primary">{{ trans('public.save_as_draft') }}</button>

                @if(!empty($webinar) and $webinar->creator_id == $authUser->id)
                    @include('web.default.panel.includes.content_delete_btn', [
                        'deleteContentUrl' => "/panel/webinars/{$webinar->id}/delete?redirect_to=/panel/webinars",
                        'deleteContentClassName' => 'webinar-actions btn btn-danger btn-sm mt-20 mt-md-0',
                        'deleteContentItem' => $webinar,
                        'deleteContentItemType' => "course",
                    ])
                @endif
            </div>
        </div>
    </div>
@endsection

@push('scripts_bottom')
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('assets/libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
    <script src="{{asset('assets/libs/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Init js-->
    <script src="{{asset('assets/js/pages/form-pickers.init.js')}}"></script>
    <!-- App js -->
    <script src="{{asset('assets/js/time_content.js')}}"></script>

    <script>
        var saveSuccessLang = '{{ trans('webinars.success_store') }}';
        var zoomJwtTokenInvalid = '{{ trans('webinars.zoom_jwt_token_invalid') }}';
        var hasZoomApiToken = '{{ (!empty($authUser->zoomApi) and !empty($authUser->zoomApi->api_key) and !empty($authUser->zoomApi->api_secret)) ? 'true' : 'false' }}';
        var editChapterLang = '{{ trans('public.edit_chapter') }}';
    </script>

    <script src="/assets/default/js/panel/webinar.min.js"></script>
    <script src="/assets/default/js/panel/webinar_content_locale.min.js"></script>
@endpush
