<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    protected $fillable = ['bag'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
