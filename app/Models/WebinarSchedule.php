<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebinarSchedule extends Model
{
    use HasFactory;

    protected $table = 'webinar_schedule';

    public function scheduleUser()
    {
        return $this->hasMany(WebinarScheduleUser::class, 'webinar_schedule_id', 'id');
    }

}
