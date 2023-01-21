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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->string('hotel_location');
            $table->string('roomtype');
            $table->string('hotel_id');
            $table->string('roomtype_id');
            $table->string('total');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
