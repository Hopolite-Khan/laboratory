<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // reservation_id [PK]
        // reservation_date 
        // reservation_type 
        // status
        // patient_id [FK] 
        // test_id [FK]

        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('reservation_type')->default('Normal Booking');
            $table->dateTime('reservation_date')->nullable();
            $table->string('status')->default('New');
            $table->unsignedBigInteger('patient_id')->nullable(); // MUST BE FK 
            $table->unsignedBigInteger('lab_test_id')->nullable(); // MUST BE FK 
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
        Schema::dropIfExists('reservations');
    }
}
