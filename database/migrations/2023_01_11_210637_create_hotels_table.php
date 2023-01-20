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
        Schema::create('hotels', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('user_id')->unique();
            $table->string('image');
            $table->string('address');
            $table->string('location');
            $table->string('rules');
            $table->string('amenities');
            $table->string('description');
            $table->string('price');
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
        Schema::dropIfExists('hotels');
    }
};
