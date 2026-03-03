<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\BodyType;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Category;


class CarController extends Controller
{
    public function ourFleets(Request $request)
    {
        $cars = Car::with([
                'model.brand',
                'features',
                'images',
                'prices',
                'interiorColor',
                'exteriorColor',
                'category',
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
    
            // Filter by multiple brands
            ->when($request->brand_ids, function ($query, $brandIds) {
                $query->whereHas('model.brand', function ($q) use ($brandIds) {
                    $q->whereIn('id', (array) $brandIds);
                });
            })
    
            // Filter by multiple models
            ->when($request->model_ids, function ($query, $modelIds) {
                $query->whereIn('model_id', (array) $modelIds);
            })
    
            // Filter by multiple categories
            ->when($request->category_ids, function ($query, $categoryIds) {
                $query->whereIn('category_id', (array) $categoryIds);
            })
    
            // Filter by multiple fuel types
            ->when($request->fuel_type_ids, function ($query, $fuelTypeIds) {
                $query->whereIn('fuel_type_id', (array) $fuelTypeIds);
            })
    
            // Filter by multiple transmissions
            ->when($request->transmission_ids, function ($query, $transmissionIds) {
                $query->whereIn('transmission_id', (array) $transmissionIds);
            })
    
            // Filter by multiple body types
            ->when($request->body_type_ids, function ($query, $bodyTypeIds) {
                $query->whereIn('body_type_id', (array) $bodyTypeIds);
            })
    
            // Filter by multiple interior colors
            ->when($request->interior_colors, function ($query, $colorIds) {
                $query->whereIn('interior_color', (array) $colorIds);
            })
    
            // Filter by multiple exterior colors
            ->when($request->exterior_colors, function ($query, $colorIds) {
                $query->whereIn('exterior_color', (array) $colorIds);
            })
    
            // Doors, seats, bags, spec, make year
            ->when($request->door_ids, fn($query, $ids) => $query->whereIn('door_id', (array) $ids))
            ->when($request->seat_ids, fn($query, $ids) => $query->whereIn('seat_id', (array) $ids))
            ->when($request->bag_ids, fn($query, $ids) => $query->whereIn('bag_id', (array) $ids))
            ->when($request->spec_ids, fn($query, $ids) => $query->whereIn('spec_id', (array) $ids))
            ->when($request->make_year_ids, fn($query, $ids) => $query->whereIn('make_year_id', (array) $ids))
    
            // Filter by multiple features
            ->when($request->feature_ids, function ($query, $featureIds) {
                $query->whereHas('features', function ($q) use ($featureIds) {
                    $q->whereIn('features.id', (array) $featureIds);
                });
            })
    
            // Daily Budget Filter
            ->when($request->max_day_budget, function ($query, $budget) {
                $query->whereHas('prices', function ($q) use ($budget) {
                    $q->where('type', 'daily')
                      ->where(function ($sub) use ($budget) {
                          $sub->where('discounted_price', '<=', $budget)
                              ->orWhere(function ($q2) use ($budget) {
                                  $q2->whereNull('discounted_price')
                                     ->where('price', '<=', $budget);
                              });
                      });
                });
            })
    
            // Monthly Budget Filter
            ->when($request->max_monthly_budget, function ($query, $budget) {
                $query->whereHas('prices', function ($q) use ($budget) {
                    $q->where('type', 'monthly')
                      ->where(function ($sub) use ($budget) {
                          $sub->where('discounted_price', '<=', $budget)
                              ->orWhere(function ($q2) use ($budget) {
                                  $q2->whereNull('discounted_price')
                                     ->where('price', '<=', $budget);
                              });
                      });
                });
            })
    
            // PRICE SORTING
            ->when($request->price_filter, function ($query, $priceFilter) {
    
                $direction = str_contains($priceFilter, 'low to high') ? 'asc' : 'desc';
    
                if (str_contains($priceFilter, 'daily')) {
                    $type = 'daily';
                } elseif (str_contains($priceFilter, 'weekly')) {
                    $type = 'weekly';
                } elseif (str_contains($priceFilter, 'monthly')) {
                    $type = 'monthly';
                } else {
                    return;
                }
    
                $query->join('car_prices as cp', function ($join) use ($type) {
                        $join->on('cars.id', '=', 'cp.car_id')
                             ->where('cp.type', $type);
                    })
                    ->orderByRaw('COALESCE(cp.discounted_price, cp.price) ' . $direction)
                    ->select('cars.*');
            })
    
            // Default Order
            ->when(!$request->price_filter, function ($query) {
                $query->orderBy('id', 'desc');
            })
    
            ->get();
    
        return view('our-fleet', compact('cars'));
    }


    public function carDetails($slug)
    {
        $car = Car::with([
            'model.brand',
            'features',
            'images',
            'prices',
            'interiorColor',
            'exteriorColor',
            'category',
            'spec',
            'transmission',
            'fuelType',
            'bodyType',
            'door',
            'seat',
            'bag',
            'makeYear'
        ])
        ->where('slug', $slug)
        ->where('status', 'active')
        ->firstOrFail();
    
        // Similar Cars (same brand OR same body type)
        $similarCars = Car::with(['images', 'model.brand', 'prices'])
        ->where('status', 'active')
        ->where('id', '!=', $car->id)
        ->where(function ($query) use ($car) {
            $query->whereHas('model.brand', function ($q) use ($car) {
                $q->where('id', $car->model->brand->id);
            })
            ->orWhere('body_type_id', $car->body_type_id);
        })
        ->orderByRaw("
            CASE
                WHEN body_type_id = ? 
                 AND EXISTS (
                    SELECT 1 FROM models 
                    WHERE models.id = cars.model_id
                    AND models.brand_id = ?
                 )
                THEN 1
                WHEN EXISTS (
                    SELECT 1 FROM models 
                    WHERE models.id = cars.model_id
                    AND models.brand_id = ?
                )
                THEN 2
                ELSE 3
            END
        ", [
            $car->body_type_id,
            $car->model->brand->id,
            $car->model->brand->id
        ])
        ->limit(6)
        ->get();


    
        return view('car-details', compact('car', 'similarCars'));
    }


    public function carByBrand($slug, Request $request)
    {
        $brand = Brand::where('slug', $slug)->firstOrFail();
    
        $cars = Car::with([
                'model.brand',
                'features',
                'images',
                'prices',
                'interiorColor',
                'exteriorColor',
                'category',
                'spec',
                'transmission',
                'fuelType',
                'bodyType',
                'door',
                'seat',
                'bag',
                'makeYear'
            ])
            ->whereHas('model.brand', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->where('status', 'active')
    
            // PRICE SORTING
            ->when($request->price_filter, function ($query, $priceFilter) {
    
                $direction = str_contains($priceFilter, 'low to high') ? 'asc' : 'desc';
    
                if (str_contains($priceFilter, 'daily')) {
                    $type = 'daily';
                } elseif (str_contains($priceFilter, 'weekly')) {
                    $type = 'weekly';
                } elseif (str_contains($priceFilter, 'monthly')) {
                    $type = 'monthly';
                } else {
                    return;
                }
    
                $query->join('car_prices as cp', function ($join) use ($type) {
                        $join->on('cars.id', '=', 'cp.car_id')
                             ->where('cp.type', $type);
                    })
                    ->orderByRaw('COALESCE(cp.discounted_price, cp.price) ' . $direction)
                    ->select('cars.*');
            })
    
            // Default order if no filter
            ->when(!$request->price_filter, function ($query) {
                $query->orderBy('id', 'desc');
            })
    
            ->get();
    
        return view('car-brand', compact('cars', 'brand'));
    }


    public function carByBodyType($slug, Request $request)
    {
        $bodyType = BodyType::where('slug', $slug)->firstOrFail();
    
        $cars = Car::with([
                'model.brand',
                'features',
                'images',
                'prices',
                'interiorColor',
                'exteriorColor',
                'category',
                'spec',
                'transmission',
                'fuelType',
                'bodyType',
                'door',
                'seat',
                'bag',
                'makeYear'
            ])
            ->where('body_type_id', $bodyType->id)
            ->where('status', 'active')
    
            // PRICE SORTING
            ->when($request->price_filter, function ($query, $priceFilter) {
    
                $direction = str_contains($priceFilter, 'low to high') ? 'asc' : 'desc';
    
                if (str_contains($priceFilter, 'daily')) {
                    $type = 'daily';
                } elseif (str_contains($priceFilter, 'weekly')) {
                    $type = 'weekly';
                } elseif (str_contains($priceFilter, 'monthly')) {
                    $type = 'monthly';
                } else {
                    return;
                }
    
                $query->join('car_prices as cp', function ($join) use ($type) {
                        $join->on('cars.id', '=', 'cp.car_id')
                             ->where('cp.type', $type);
                    })
                    ->orderByRaw('COALESCE(cp.discounted_price, cp.price) ' . $direction)
                    ->select('cars.*');
            })
    
            ->when(!$request->price_filter, function ($query) {
                $query->orderBy('id', 'desc');
            })
    
            ->get();
    
        return view('car-body-type', compact('cars', 'bodyType'));
    }



    public function carByCategory($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
    
        $cars = Car::with([
                'model.brand',
                'features',
                'images',
                'prices',
                'interiorColor',
                'exteriorColor',
                'category',
                'spec',
                'transmission',
                'fuelType',
                'bodyType',
                'door',
                'seat',
                'bag',
                'makeYear'
            ])
            ->whereHas('category', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->where('status', 'active')
    
            // PRICE SORTING
            ->when($request->price_filter, function ($query, $priceFilter) {
    
                $direction = str_contains($priceFilter, 'low to high') ? 'asc' : 'desc';
    
                if (str_contains($priceFilter, 'daily')) {
                    $type = 'daily';
                } elseif (str_contains($priceFilter, 'weekly')) {
                    $type = 'weekly';
                } elseif (str_contains($priceFilter, 'monthly')) {
                    $type = 'monthly';
                } else {
                    return;
                }
    
                $query->join('car_prices as cp', function ($join) use ($type) {
                        $join->on('cars.id', '=', 'cp.car_id')
                             ->where('cp.type', $type);
                    })
                    ->orderByRaw('COALESCE(cp.discounted_price, cp.price) ' . $direction)
                    ->select('cars.*');
            })
    
            ->when(!$request->price_filter, function ($query) {
                $query->orderBy('id', 'desc');
            })
    
            ->get();
    
        return view('car-category', compact('cars', 'category'));
    }


}
