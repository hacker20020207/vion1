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
        Schema::create('webinar_schedule_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('webinar_schedule_id');
            $table->foreignId('user_id');
            $table->boolean('attended')->default(false); // qatnashgan yoki qatnashmagan
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
        Schema::dropIfExists('webinar_schedule_user');
    }
};
