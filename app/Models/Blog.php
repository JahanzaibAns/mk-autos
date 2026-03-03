<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'slug',
        'meta_title',
        'meta_description',
        'image',
        'description',
    ];

    // Optional: Automatically generate slug from heading
    // protected static function booted()
    // {
    //     static::creating(function ($blog) {
    //         if (empty($blog->slug)) {
    //             $blog->slug = Str::slug($blog->heading);
    //         }
    //     });
    // }
}
