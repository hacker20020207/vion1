<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinar_schedule_templates', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedInteger('webinar_id')->nullable();
            $table->unsignedInteger('day_of_week_id'); // Masalan: 'Monday', 'Tuesday', ...
            $table->unsignedTinyInteger('status')->default(0);
            $table->time('start_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webinar_schedule_templates');
    }
};
