<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['feature'];

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_features');
    }
}
