<div id="time_content" class="d-none">
    <div id="monday_content" class="opacity_content">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Monday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="mondayDate" id="mondayDate" value="09:30">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success" onclick="activateWeekDayFunc('monday')" id="mondayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger d-none" onclick="disactivateWeekDayFunc('monday')" id="mondayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="monday_confirmed" value="0" id="monday_confirmed">
    </div>
    <div id="thuesday_content" class="opacity_content">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Tuesday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="thuesdayDate" id="thuesdayDate" value="09:30">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success" onclick="activateWeekDayFunc('thuesday')" id="thuesdayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger d-none" onclick="disactivateWeekDayFunc('thuesday')" id="thuesdayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="thuesday_confirmed" value="0" id="thuesday_confirmed">
    </div>
    <div id="wednesday_content" class="opacity_content">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Wednesday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="wednesdayDate" id="wednesdayDate" value="09:30">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success" onclick="activateWeekDayFunc('wednesday')" id="wednesdayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger d-none" onclick="disactivateWeekDayFunc('wednesday')" id="wednesdayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="wednesday_confirmed" value="0" id="wednesday_confirmed">
    </div>
    <div id="thursday_content" class="opacity_content">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Thursday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="thursdayDate" id="thursdayDate" value="09:30">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success" onclick="activateWeekDayFunc('thursday')" id="thursdayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger d-none" onclick="disactivateWeekDayFunc('thursday')" id="thursdayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="thursday_confirmed" value="0" id="thursday_confirmed">
    </div>
    <div id="friday_content" class="opacity_content">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Friday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="fridayDate" id="fridayDate" value="09:30">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success" onclick="activateWeekDayFunc('friday')" id="fridayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger d-none" onclick="disactivateWeekDayFunc('friday')" id="fridayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="friday_confirmed" value="0" id="friday_confirmed">
    </div>
    <div id="saturday_content" class="opacity_content">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Saturday') }}" readonly>
        </div>
        <div class="form-group mt-15">
            <label class="input-label d-block">{{ trans('panel.Select time') }}</label>
            <div class="d-flex">
                <div>
                    <div class="input-group clockpicker">
                        <input type="text" class="form-control" disabled name="saturdayDate" id="saturdayDate" value="09:30">
                        <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                    </div>
                </div>
                <div class="d-flex">
                    <span class="btn-success" onclick="activateWeekDayFunc('saturday')" id="saturdayActivateButton">
                        <span class="mdi mdi-check"></span>
                    </span>
                    <span class="btn-danger d-none" onclick="disactivateWeekDayFunc('saturday')" id="saturdayDisactivateButton">
                        <span class="mdi mdi-close"></span>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="saturday_confirmed" value="0" id="saturday_confirmed">
    </div>
    <div id="sunday_content" class="opacity_content">
        <div class="form-group mt-15">
            <input class="form-control" type="text" value="{{ trans('webinars.Sunday') }}" readonly>
        </div>
        <div class="d-flex">
            <div>
                <div class="input-group clockpicker">
                    <input type="text" class="form-control" disabled name="sundayDate" id="sundayDate" value="09:30">
                    <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                </div>
            </div>
            <div class="d-flex">
                <span class="btn-success" onclick="activateWeekDayFunc('sunday')" id="sundayActivateButton">
                    <span class="mdi mdi-check"></span>
                </span>
                <span class="btn-danger d-none" onclick="disactivateWeekDayFunc('sunday')" id="sundayDisactivateButton">
                    <span class="mdi mdi-close"></span>
                </span>
            </div>
        </div>
        <input type="hidden" name="sunday_confirmed" value="0" id="sunday_confirmed">
    </div>
</div>
