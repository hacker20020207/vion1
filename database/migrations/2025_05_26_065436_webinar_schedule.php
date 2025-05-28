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
        Schema::create('webinar_schedule', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedInteger('webinar_id')->nullable();
            $table->unsignedBigInteger('chapter_id')->nullable();
            $table->date('date');  // dars o‘tkazilgan sana
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->unsignedTinyInteger('status')->default(0);
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('webinar_schedule');
    }
};
