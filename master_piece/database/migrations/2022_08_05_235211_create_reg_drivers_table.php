<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_drivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_driver_id')->unique();
            $table->string('driver_fname')->nullable();
            $table->string('driver_lname')->nullable();
            $table->string('driver_email')->unique();
            $table->string('driver_mobile')->nullable();
            $table->string('rule')->nullable();
            $table->string('driver_image')->nullable();
            $table->string('driver_address')->nullable();
            $table->string('gender')->nullable();
            $table->string('id_card')->nullable();
            $table->string('license')->nullable();
            
            $table->string('car_model')->nullable();
            $table->string('car_image')->nullable();
            $table->string('car_description')->nullable();
            $table->string('car_number')->nullable();
            $table->string('car_color')->nullable();

            $table->foreign('user_driver_id')->on('users')->references('id');
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
        Schema::dropIfExists('reg_drivers');
    }
}
