<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
