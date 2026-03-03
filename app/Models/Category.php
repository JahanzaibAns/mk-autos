<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'slug',
        'status'
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
