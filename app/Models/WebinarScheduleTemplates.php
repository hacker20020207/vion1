<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebinarScheduleTemplates extends Model
{
    use HasFactory;

    protected $table = 'webinar_schedule_templates';

    public function daysOfWeek(){
        return $this->hasOne(DaysOfWeek::class, 'id', 'day_of_week_id');
    }

}
