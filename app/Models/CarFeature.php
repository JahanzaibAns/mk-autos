<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarFeature extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'feature_id'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
