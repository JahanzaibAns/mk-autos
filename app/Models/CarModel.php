<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'models';

    protected $fillable = [
        'brand_id',
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'status',
    ];

  
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function cars()
    {
        return $this->hasMany(Car::class, 'model_id');
    }
}

