<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    // use HasFactory;
    protected $guarded = ['created_at', 'updated_at'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
