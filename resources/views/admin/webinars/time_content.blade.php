{{--@dd($webinar->scheduleTemplates)--}}
@php
    $monday_date = '';
    $thuesday_date = '';
    $wednesday_date = '';
    $thursday_date = '';
    $friday_date = '';
    $saturday_date = '';
    $sunday_date = '';
    if(isset($webinar)){
        foreach($webinar->scheduleTemplates as $scheduleTemplate){
            $start_time_array = explode(':', $scheduleTemplate->start_time);
            array_pop($start_time_array);
            $start_time = implode(':', $start_time_array);
            if($scheduleTemplate->daysOfWeek){
                switch($scheduleTemplate->daysOfWeek->name){
                    case 'Monday':
                        $monday_date = $start_time;
                        break;
                    case 'Tuesday':
                        $thuesday_date = $start_time;
                        break;
                    case 'Wednesday':
                        $wednesday_date = $start_time;
                        break;
                    case 'Thursday':
                        $thursday_date = $start_time;
                        break;
                    case 'Friday':
                        $friday_date = $start_time;
                        break;
                    case 'Saturday':
                        $saturday_date = $start_time;
                        break;
                    case 'Sunday':
                        $sunday_date = $start_time;
                        break;
                }
            }
        }
    }
@endphp
<div id="time_content" class="@if(empty($webinar)) d-none @endif">
    <div id="monday_content" class="@if(!$monday_date) opacity_content @endif">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Monday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="mondayDate" id="mondayDate" value="{{ $monday_date?$monday_date:'09:30' }}">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success @if($monday_date) d-none @endif" onclick="activateWeekDayFunc('monday')" id="mondayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger @if(!$monday_date) d-none @endif" onclick="disactivateWeekDayFunc('monday')" id="mondayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="monday_confirmed" value="{{$monday_date?1:0}}" id="monday_confirmed">
    </div>
    <div id="thuesday_content" class="@if(!$thuesday_date) opacity_content @endif">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Tuesday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="thuesdayDate" id="thuesdayDate" value="{{ $thuesday_date?$thuesday_date:'09:30' }}">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success @if($thuesday_date) d-none @endif" onclick="activateWeekDayFunc('thuesday')" id="thuesdayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger @if(!$thuesday_date) d-none @endif" onclick="disactivateWeekDayFunc('thuesday')" id="thuesdayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="thuesday_confirmed" value="{{$thuesday_date?1:0}}" id="thuesday_confirmed">
    </div>
    <div id="wednesday_content" class="@if(!$wednesday_date) opacity_content @endif">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Wednesday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="wednesdayDate" id="wednesdayDate" value="{{ $wednesday_date?$wednesday_date:'09:30' }}">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success @if($wednesday_date) d-none @endif" onclick="activateWeekDayFunc('wednesday')" id="wednesdayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger @if(!$wednesday_date) d-none @endif" onclick="disactivateWeekDayFunc('wednesday')" id="wednesdayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="wednesday_confirmed" value="{{$wednesday_date?1:0}}" id="wednesday_confirmed">
    </div>
    <div id="thursday_content" class="@if(!$thursday_date) opacity_content @endif">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Thursday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="thursdayDate" id="thursdayDate" value="{{ $thursday_date?$thursday_date:'09:30' }}">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success @if($thursday_date) d-none @endif" onclick="activateWeekDayFunc('thursday')" id="thursdayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger @if(!$thursday_date) d-none @endif" onclick="disactivateWeekDayFunc('thursday')" id="thursdayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="thursday_confirmed" value="{{$thursday_date?1:0}}" id="thursday_confirmed">
    </div>
    <div id="friday_content" class="@if(!$friday_date) opacity_content @endif">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Friday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="fridayDate" id="fridayDate" value="{{ $friday_date?$friday_date:'09:30' }}">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success @if($friday_date) d-none @endif" onclick="activateWeekDayFunc('friday')" id="fridayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger @if(!$friday_date) d-none @endif" onclick="disactivateWeekDayFunc('friday')" id="fridayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="friday_confirmed" value="{{$friday_date?1:0}}" id="friday_confirmed">
    </div>
    <div id="saturday_content" class="@if(!$saturday_date) opacity_content @endif">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Saturday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="saturdayDate" id="saturdayDate" value="{{ $saturday_date?$saturday_date:'09:30' }}">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success @if($saturday_date) d-none @endif" onclick="activateWeekDayFunc('saturday')" id="saturdayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger @if(!$saturday_date) d-none @endif" onclick="disactivateWeekDayFunc('saturday')" id="saturdayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="saturday_confirmed" value="{{$saturday_date?1:0}}" id="saturday_confirmed">
    </div>
    <div id="sunday_content" class="@if(!$sunday_date) opacity_content @endif">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Sunday') }}" readonly>
        </div>
        <div class="d-flex">
            <div>
                <div class="input-group clockpicker">
                    <input type="text" class="form-control" disabled name="sundayDate" id="sundayDate" value="{{ $sunday_date?$sunday_date:'09:30' }}">
                    <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                </div>
            </div>
            <div class="d-flex">
                <span class="btn-success @if($sunday_date) d-none @endif" onclick="activateWeekDayFunc('sunday')" id="sundayActivateButton">
                    <span class="mdi mdi-check"></span>
                </span>
                <span class="btn-danger @if(!$sunday_date) d-none @endif" onclick="disactivateWeekDayFunc('sunday')" id="sundayDisactivateButton">
                    <span class="mdi mdi-close"></span>
                </span>
            </div>
        </div>
        <input type="hidden" name="sunday_confirmed" value="{{$sunday_date?1:0}}" id="sunday_confirmed">
    </div>
</div>
