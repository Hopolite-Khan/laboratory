<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    use HasFactory;
    protected $guarded = ['created_at' , 'updated_at'];

    public function Patient()
    {
        return $this->belongsToMany(Patient::class, 'reservations' , 'patient_id' , 'lab_test_id' )->withPivot(
            'reservation_type',
            'reservation_date',
            'status'
            );
    }




}
