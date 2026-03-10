<?php

namespace App\Helpers;

use App\Models\BodyType;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\MakeYear;
use App\Models\Car;
use App\Models\Category;
use App\Models\FuelType;
use App\Models\Transmission;
use App\Models\Color;
use App\Models\Door;
use App\Models\Seat;
use App\Models\Bag;
use App\Models\Spec;
use App\Models\Feature;
use Illuminate\Support\Str;

class GeneralHelper
{
    public static function carSlug($model_id, $make_year_id)
    {
        $model = CarModel::with('brand')->find($model_id);
        $makeYear = MakeYear::find($make_year_id);

        if (!$model || !$makeYear || !$model->brand) {
            return null;
        }

        $brandName = $model->brand->name;
        $modelName = $model->name;
        $year = $makeYear->year;

     
        $baseSlug = Str::slug("{$brandName} {$modelName} {$year}");

        $slug = $baseSlug;
        $counter = 1;


        while (Car::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter++;
        }

        return $slug;
    }

    public static function getCarBrandsMenuHtml()
    {
        $brands = Brand::whereHas('carModels.cars', function ($query) {
            $query->where('status', 'active');
        })->orderBy('name')->get();

        $html = '';

          // Add "Show All" on top
        $html .= '<li><a class="dropdown-item" href="' . route('our.fleet') . '">View All</a></li>';

        foreach ($brands as $brand) {
            $html .= '<li><a class="dropdown-item" href="' . route('car.brand', ['slug' => $brand->slug]) . '">' . e($brand->name) . '</a></li>';
        }

        return $html;
    }

    public static function getCarBodyTypesMenuHtml()
    {
        $bodyTypes = BodyType::whereHas('cars', function ($query) {
            $query->where('status', 'active');
        })->orderBy('body_type')->get();

        $html = '';

          // Add "Show All" on top
        $html .= '<li><a class="dropdown-item" href="' . route('our.fleet') . '">View All</a></li>';

        foreach ($bodyTypes as $bodyType) {
            $html .= '<li><a class="dropdown-item" href="' . route('car.bodyType', ['slug' => $bodyType->slug]) . '">' . e($bodyType->body_type) . '</a></li>';
        }

        return $html;
    }

    public static function getCarCategoriesMenuHtml()
    {
        $categories = Category::whereHas('cars', function ($query) {
            $query->where('status', 'active');
        })->orderBy('category')->get();

        $html = '';

        // Add "Show All" on top
        $html .= '<li><a class="dropdown-item" href="' . route('our.fleet') . '">View All</a></li>';

        foreach ($categories as $category) {
            $html .= '<li><a class="dropdown-item" href="' 
                . route('car.category', ['slug' => $category->slug]) 
                . '">' . e($category->category) . '</a></li>';
        }

        return $html;
    }


    public static function generateFilters()
    {
        $cars = Car::with([
            'model.brand', 
            'features', 
            'fuelType', 
            'transmission', 
            'categories', 
            'interiorColor', 
            'exteriorColor', 
            'seat', 
            'door', 
            'bag', 
            'makeYear'
        ])->where('status', 'active')->get();

        // Extract unique filter values
        $brands        = $cars->pluck('model.brand')->filter()->unique('id');
        $models        = $cars->pluck('model')->filter()->unique('id');
        $features      = $cars->pluck('features')->flatten()->filter()->unique('id');
        $fuelTypes     = $cars->pluck('fuelType')->filter()->unique('id');
        $transmissions = $cars->pluck('transmission')->filter()->unique('id');
        $categories    = $cars->pluck('categories')->flatten()->filter()->unique('id');
        $interiorColors= $cars->pluck('interiorColor')->filter()->unique('id');
        $exteriorColors= $cars->pluck('exteriorColor')->filter()->unique('id');
        $seats         = $cars->pluck('seat')->filter()->unique('id');
        $doors         = $cars->pluck('door')->filter()->unique('id');
        $bags          = $cars->pluck('bag')->filter()->unique('id');
        $makeYears     = $cars->pluck('makeYear')->filter()->unique('id');

        // Get selected filters from request
        $selectedBrands        = request()->input('brand_ids', []);
        $selectedModels        = request()->input('model_ids', []);
        $selectedFeatures      = request()->input('feature_ids', []);
        $selectedFuelTypes     = request()->input('fuel_type_ids', []);
        $selectedTransmissions = request()->input('transmission_ids', []);
        $selectedCategories    = request()->input('category_ids', []);
        $selectedInterior      = request()->input('interior_colors', []);
        $selectedExterior      = request()->input('exterior_colors', []);
        $selectedSeats         = request()->input('seat_ids', []);
        $selectedDoors         = request()->input('door_ids', []);
        $selectedBags          = request()->input('bag_ids', []);
        $selectedYears         = request()->input('make_year_ids', []);

        $html = '';

        // Brands
        $html .= '<div class="filter_body"><h4>Brands</h4>';
        foreach ($brands as $brand) {
            $checked = in_array($brand->id, $selectedBrands) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="brand_ids[]" value="'.$brand->id.'" '.$checked.'> '.$brand->name.'</label><br>';
        }
        $html .= '</div>';

        // Models
        $html .= '<div class="filter_body"><h4>Models</h4>';
        foreach ($models as $model) {
            $checked = in_array($model->id, $selectedModels) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="model_ids[]" value="'.$model->id.'" '.$checked.'> '.$model->name.'</label><br>';
        }
        $html .= '</div>';

        // Features
        $html .= '<div class="filter_body"><h4>Features</h4>';
        foreach ($features as $feature) {
            $checked = in_array($feature->id, $selectedFeatures) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="feature_ids[]" value="'.$feature->id.'" '.$checked.'> '.$feature->feature.'</label><br>';
        }
        $html .= '</div>';

        // Fuel Types
        $html .= '<div class="filter_body"><h4>Fuel Types</h4>';
        foreach ($fuelTypes as $fuel) {
            $checked = in_array($fuel->id, $selectedFuelTypes) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="fuel_type_ids[]" value="'.$fuel->id.'" '.$checked.'> '.$fuel->fuel_type.'</label><br>';
        }
        $html .= '</div>';

        // Transmissions
        $html .= '<div class="filter_body"><h4>Transmissions</h4>';
        foreach ($transmissions as $trans) {
            $checked = in_array($trans->id, $selectedTransmissions) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="transmission_ids[]" value="'.$trans->id.'" '.$checked.'> '.$trans->transmission.'</label><br>';
        }
        $html .= '</div>';

        // Categories
        $html .= '<div class="filter_body"><h4>Categories</h4>';
        foreach ($categories as $cat) {
            $checked = in_array($cat->id, $selectedCategories) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="category_ids[]" value="'.$cat->id.'" '.$checked.'> '.$cat->category.'</label><br>';
        }
        $html .= '</div>';

        // Interior Colors
        $html .= '<div class="filter_body"><h4>Interior Colors</h4>';
        foreach ($interiorColors as $color) {
            $checked = in_array($color->id, $selectedInterior) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="interior_colors[]" value="'.$color->id.'" '.$checked.'> '.$color->color.'</label><br>';
        }
        $html .= '</div>';

        // Exterior Colors
        $html .= '<div class="filter_body"><h4>Exterior Colors</h4>';
        foreach ($exteriorColors as $color) {
            $checked = in_array($color->id, $selectedExterior) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="exterior_colors[]" value="'.$color->id.'" '.$checked.'> '.$color->color.'</label><br>';
        }
        $html .= '</div>';

        // Seats
        $html .= '<div class="filter_body"><h4>Seats</h4>';
        foreach ($seats as $seat) {
            $checked = in_array($seat->id, $selectedSeats) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="seat_ids[]" value="'.$seat->id.'" '.$checked.'> '.$seat->seat.'</label><br>';
        }
        $html .= '</div>';

        // Doors
        $html .= '<div class="filter_body"><h4>Doors</h4>';
        foreach ($doors as $door) {
            $checked = in_array($door->id, $selectedDoors) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="door_ids[]" value="'.$door->id.'" '.$checked.'> '.$door->door.'</label><br>';
        }
        $html .= '</div>';

        // Bags
        $html .= '<div class="filter_body"><h4>Bags</h4>';
        foreach ($bags as $bag) {
            $checked = in_array($bag->id, $selectedBags) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="bag_ids[]" value="'.$bag->id.'" '.$checked.'> '.$bag->bag.'</label><br>';
        }
        $html .= '</div>';

        // Make Years
        $html .= '<div class="filter_body"><h4>Make Years</h4>';
        foreach ($makeYears as $year) {
            $checked = in_array($year->id, $selectedYears) ? 'checked' : '';
            $html .= '<label><input type="checkbox" name="make_year_ids[]" value="'.$year->id.'" '.$checked.'> '.$year->year.'</label><br>';
        }
        $html .= '</div>';

        return $html;
    }






   
}
