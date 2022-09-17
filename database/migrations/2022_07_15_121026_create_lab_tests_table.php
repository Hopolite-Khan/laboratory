<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // test_id [PK]
        // test_name
        // test_type
        // test_result [ either number / negative-positive]
        // result_date
        // test_date
        // done_by
        // test_status
        // collection_time
        // created_at
        // update_at
        // test_price
        // payment_recieved
        // payment_amount_due
        // payment_method
        // tax
        // discount
        // batch_number
        // patient_id [FK]

        Schema::create('lab_tests', function (Blueprint $table) {
            $table->id();
            $table->string('test_name');
            $table->string('test_type')->nullable();
            $table->dateTime('test_date');
            $table->string('test_result')->nullable();
            $table->dateTime('test_result_date')->nullable();
            $table->string('done_by')->nullable();
            $table->string('test_status')->nullable();
            $table->dateTime('collection_time')->nullable();
            $table->mediumInteger('test_price')->nullable();
            $table->mediumInteger('recieved_amount')->nullable();
            $table->mediumInteger('due_amount')->nullable();
            $table->string('payment_method')->nullable();
            $table->mediumInteger('tax')->nullable();
            $table->mediumInteger('discount')->nullable();
            $table->string('batch_number')->nullable();
            $table->unsignedBigInteger('patient_id')->nullable(); // MUST BE FK

            // $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->OnUpdate('Cascade');

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
        Schema::dropIfExists('lab_tests');
    }
}
