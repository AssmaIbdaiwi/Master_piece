<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();   
            $table->unsignedInteger('driver_id');        
            $table->string('car_model');
            $table->string('car_image')->nullable();
            $table->string('car_description');
            $table->string('car_number');
            $table->string('car_color');
            $table->timestamps();
            
            $table->foreign('driver_id')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
