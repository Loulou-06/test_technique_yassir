<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
    public function cruiseShip()
    {
        return $this->belongsTo(CruiseShip::class);
    }

    use HasFactory;
}
