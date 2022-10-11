<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    // use HasFactory;
    protected $guarded = ['created_at' , 'updated_at'];


    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function LabTest()
    {
        return $this->belongsToMany(LabTest::class, 'reservations' , 'patient_id' , 'lab_test_id' )->withPivot(
            'reservation_type',
            'reservation_date',
            'status'
            );;
    }
}
