<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BodyType extends Model
{
    protected $fillable = ['body_type'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
