<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    protected $fillable = ['spec'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
