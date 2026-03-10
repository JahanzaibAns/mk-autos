<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Car;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function homePage()
    {
        $blogs = Blog::orderBy('id', 'desc')->take(3)->get();

        $economyCars = Car::with([
            'model.brand',
            'features',
            'images',
            'prices',
            'interiorColor',
            'exteriorColor',
            'categories',
            'spec',
            'transmission',
            'fuelType',
            'bodyType',
            'door',
            'seat',
            'bag',
            'makeYear'
        ])
        ->where('status', 'active')
        ->where('is_featured', 1)
        ->whereHas('categories', function($query) {
            $query->where('categories.id', 1);
        })
        ->orderBy('id', 'desc')
        ->get();

        $luxuryCars = Car::with([
            'model.brand',
            'features',
            'images',
            'prices',
            'interiorColor',
            'exteriorColor',
            'categories',
            'spec',
            'transmission',
            'fuelType',
            'bodyType',
            'door',
            'seat',
            'bag',
            'makeYear'
        ])
        ->where('status', 'active')
        ->where('is_featured', 1)
        ->whereHas('categories', function($query) {
            $query->where('categories.id', 2);
        })
        ->orderBy('id', 'desc')
        ->get();

        $sportsCars = Car::with([
            'model.brand',
            'features',
            'images',
            'prices',
            'interiorColor',
            'exteriorColor',
            'categories',
            'spec',
            'transmission',
            'fuelType',
            'bodyType',
            'door',
            'seat',
            'bag',
            'makeYear'
        ])
        ->where('status', 'active')
        ->where('is_featured', 1)
        ->whereHas('categories', function($query) {
            $query->where('categories.id', 3);
        })
        ->orderBy('id', 'desc')
        ->get();
        
        $suvCars = Car::with([
            'model.brand',
            'features',
            'images',
            'prices',
            'interiorColor',
            'exteriorColor',
            'categories',
            'spec',
            'transmission',
            'fuelType',
            'bodyType',
            'door',
            'seat',
            'bag',
            'makeYear'
        ])
        ->where('status', 'active')
        ->where('is_featured', 1)
        ->where('body_type_id', 3)
        ->orderBy('id', 'desc')
        ->get();

        return view('index', compact('blogs', 'economyCars', 'luxuryCars', 'sportsCars', 'suvCars'));
    }
   

}
