<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CruiseShip extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function cabin()
    {
        return $this->hasMany(Cabin::class);
    }
    use HasFactory;
}
