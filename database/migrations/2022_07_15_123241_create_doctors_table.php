<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DOCTOR TABLE
        // doctor_id
        // doctor_name
        // department
        // mobile
        // passport_id
        // status
        // address
        // created_at
        // update_at
        // hospital_id [FK]

        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department')->nullable();
            $table->string('mobile')->nullable();
            $table->string('passport_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('status')->default('Active');
            $table->unsignedBigInteger('hospital_id')->nullable(); // MUST BE FK
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
        Schema::dropIfExists('doctors');
    }
}
