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
        Schema::create('click_uzs', function (Blueprint $table) {
            $table->id();
            $table->string('click_trans_id')->nullable();
            $table->string('merchant_trans_id')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->timestamp('sign_time')->nullable();
            $table->string('situation')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('click_uzs');
    }
};
