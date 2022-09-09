<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $guarded = ['created_at' , 'updated_at'];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function labTest()
    {
        return $this->belongsTo(LabTest::class);
    }
}
