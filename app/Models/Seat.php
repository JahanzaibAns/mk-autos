<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = ['seat'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
