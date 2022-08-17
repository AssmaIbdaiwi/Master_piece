<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('trip_driver_id'); 
            $table->unsignedInteger('trip_user_id'); 
            $table->string('location_from')->nullable();
            $table->string('location_to')->nullable();
            $table->string('trip_price')->nullable();
            $table->string('booking_date')->nullable();
            $table->string('booking_hour')->nullable();
            $table->string('booking_gender')->nullable();
            $table->string('booking_luggages')->nullable();
            $table->string('passengers_numbers')->nullable();
            $table->timestamps();
            $table->foreign('trip_driver_id')->on('users')->references('id');
            $table->foreign('trip_user_id')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip');
    }
}
