<?php

namespace Database\Seeders;

use App\Models\DaysOfWeek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaysOfWeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days_of_week = DaysOfWeek::first();
        if(!$days_of_week){
            $weeks = [
                ['name' => 'Monday'],
                ['name' => 'Thuesday'],
                ['name' => 'Wednesday'],
                ['name' => 'Thursday'],
                ['name' => 'Friday'],
                ['name' => 'Saturday'],
                ['name' => 'Sunday'],
            ];
            DB::table('days_of_week')->insert($weeks);
        }
    }
}
