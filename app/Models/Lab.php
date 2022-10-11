<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    protected $guarded = ['created_at' , 'updated_at'];
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    public function hospital()
    {
        return $this->hasMany(Hospital::class);
    }
}
