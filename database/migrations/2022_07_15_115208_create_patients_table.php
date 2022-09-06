<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        

            // id_type 
            // full_name 
            // nationality 
            // passport_id 
            // mobile
            // email 
            // dob 
            // gender 
            // address 
            // status 
            // hospital_id [FK]
            // doctor_id [FK]



        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('full_name'); 
            $table->string('id_type')->nullable();
            $table->string('nationality')->nullable();
            $table->string('passport_id')->nullable();
            $table->string('mobile');
            $table->string('gender')->nullable();
            $table->string('status')->default('New');
            $table->unsignedBigInteger('hospital_id')->nullable(); // MUST BE FK 
            $table->unsignedBigInteger('doctor_id')->nullable(); // MUST BE FK 


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
        Schema::dropIfExists('patients');
    }
}
