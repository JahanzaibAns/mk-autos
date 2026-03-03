<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'type',
        'price',
        'discounted_price',
        'kilometers'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
