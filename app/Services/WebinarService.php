<?php

namespace App\Services;

use App\Constants;
use App\Models\DaysOfWeek;
use App\Models\WebinarScheduleTemplates;

class WebinarService{
    public function saveNewWebinarScheduleTemplate($webinar_id, $week_id, $time){
        $webinar_schedule_template = WebinarScheduleTemplates::where(['webinar_id'=> $webinar_id, 'day_of_week_id'=>$week_id])->first();
        if(!$webinar_schedule_template){
            $webinar_schedule_template = new WebinarScheduleTemplates();
        }
        $webinar_schedule_template->webinar_id = $webinar_id;
        $webinar_schedule_template->day_of_week_id = $week_id;
        $webinar_schedule_template->status = Constants::WEBINAR_SCHEDULE_TEMPLATE_ACTIVE;
        $webinar_schedule_template->start_time = $time;
        $webinar_schedule_template->save();
    }

    public function setWebinarScheduleTemplate($webinar, $request, $type){
        $mondayDate = $request->mondayDate;
        $monday_confirmed = $request->monday_confirmed;
        $thuesdayDate = $request->thuesdayDate;
        $thuesday_confirmed = $request->thuesday_confirmed;
        $wednesdayDate = $request->wednesdayDate;
        $wednesday_confirmed = $request->wednesday_confirmed;
        $thursdayDate = $request->thursdayDate;
        $thursday_confirmed = $request->thursday_confirmed;
        $fridayDate = $request->fridayDate;
        $friday_confirmed = $request->friday_confirmed;
        $saturdayDate = $request->saturdayDate;
        $saturday_confirmed = $request->saturday_confirmed;
        $sundayDate = $request->sundayDate;
        $sunday_confirmed = $request->sunday_confirmed;

        $daysOfWeek = DaysOfWeek::get();
        $monday = $daysOfWeek->firstWhere('name', 'Monday');
        $thuesday = $daysOfWeek->firstWhere('name', 'Thuesday');
        $wednesday = $daysOfWeek->firstWhere('name', 'Wednesday');
        $thursday = $daysOfWeek->firstWhere('name', 'Thursday');
        $friday = $daysOfWeek->firstWhere('name', 'Friday');
        $saturday = $daysOfWeek->firstWhere('name', 'Saturday');
        $sunday = $daysOfWeek->firstWhere('name', 'Sunday');

        if($type == 'update'){
            $webinar->scheduleTemplates->each->delete();
        }
        if($monday_confirmed == 1 && $monday){
            $this->saveNewWebinarScheduleTemplate($webinar->id, $monday->id, $mondayDate);
        }
        if($thuesday_confirmed == 1 && $thuesday){
            $this->saveNewWebinarScheduleTemplate($webinar->id, $thuesday->id, $thuesdayDate);
        }
        if($wednesday_confirmed == 1 && $wednesday){
            $this->saveNewWebinarScheduleTemplate($webinar->id, $wednesday->id, $wednesdayDate);
        }
        if($thursday_confirmed == 1 && $thursday){
            $this->saveNewWebinarScheduleTemplate($webinar->id, $thursday->id, $thursdayDate);
        }
        if($friday_confirmed == 1 && $friday){
            $this->saveNewWebinarScheduleTemplate($webinar->id, $friday->id, $fridayDate);
        }
        if($saturday_confirmed == 1 && $saturday){
            $this->saveNewWebinarScheduleTemplate($webinar->id, $saturday->id, $saturdayDate);
        }
        if($sunday_confirmed == 1 && $sunday){
            $this->saveNewWebinarScheduleTemplate($webinar->id, $sunday->id, $sundayDate);
        }
    }
}



?>
