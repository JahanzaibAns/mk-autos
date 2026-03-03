<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
    protected $fillable = ['door'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
