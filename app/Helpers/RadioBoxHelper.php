<?php

namespace App\Helpers;

use App\Models\Color;
use App\Models\Spec;
use App\Models\Door;
use App\Models\Seat;
use App\Models\Bag;
use App\Models\Transmission;
use App\Models\FuelType;
use App\Models\Feature;
use App\Models\Category;

class RadioBoxHelper
{
    public static function generateRadios($items, $name, $labelKey = 'name', $valueKey = 'id', $title = null, $selected = null)
    {
        $html = '';
        if ($title) {
            $html .= "<h6>{$title}</h6>\n";
        }
        $html .= "<ul class=\"specs_list\">\n";
        foreach ($items as $item) {
            $id = $item->$valueKey;
            $label = $item->$labelKey;
            $inputId = "{$name}_{$id}";
            $isChecked = ($selected == $id) ? 'checked' : '';

            $html .= <<<HTML
                <li>
                    <input type="radio" class="btn-check" id="{$inputId}" name="{$name}" value="{$id}" {$isChecked}>
                    <label class="btn btn-outline-dark custom_btn" for="{$inputId}">{$label}</label>
                </li>

            HTML;
        }
        $html .= "</ul>\n";

        return $html;
    }

    public static function exteriorColorRadios($selected = null)
    {
        return self::generateRadios(Color::all(), 'exterior_color', 'color', 'id', 'Exterior Color', $selected);
    }

    public static function interiorColorRadios($selected = null)
    {
        return self::generateRadios(Color::all(), 'interior_color', 'color', 'id', 'Interior Color', $selected);
    }

    public static function specRadios($selected = null)
    {
        return self::generateRadios(Spec::all(), 'spec_id', 'spec', 'id', 'Spec', $selected);
    }

    public static function doorRadios($selected = null)
    {
        return self::generateRadios(Door::all(), 'door_id', 'door', 'id', 'Doors', $selected);
    }

    public static function seatRadios($selected = null)
    {
        return self::generateRadios(Seat::all(), 'seat_id', 'seat', 'id', 'Seats', $selected);
    }

    public static function bagRadios($selected = null)
    {
        return self::generateRadios(Bag::all(), 'bag_id', 'bag', 'id', 'Bags', $selected);
    }

    public static function transmissionRadios($selected = null)
    {
        return self::generateRadios(Transmission::all(), 'transmission_id', 'transmission', 'id', 'Transmission', $selected);
    }

    public static function fuelTypeRadios($selected = null)
    {
        return self::generateRadios(FuelType::all(), 'fuel_type_id', 'fuel_type', 'id', 'Fuel Type', $selected);
    }

    public static function featureCheckBoxes($selected = [])
    {
        $features = Feature::all();
        $html = "<h6>Features</h6>\n<ul class=\"specs_list\">\n";

        foreach ($features as $feature) {
            $id = $feature->id;
            $label = $feature->feature;
            $inputId = "feature_{$id}";
            $isChecked = in_array($id, $selected) ? 'checked' : '';

            $html .= <<<HTML
            <li>
                <input type="checkbox" class="btn-check" id="{$inputId}" name="features[]" value="{$id}" {$isChecked}>
                <label class="btn btn-outline-dark custom_btn" for="{$inputId}">{$label}</label>
            </li>

            HTML;
        }

        $html .= "</ul>\n";
        return $html;
    }

    public static function categoryCheckBoxes($selected = [])
    {
        $categories = Category::where('status', 1)->get();
        $html = '<label for="categories" class="col-md-4 align-content-center">Car Categories</label>';
        $html .= '<div class="col-md-8">';
        $html .= "<div class=\"row\">\n";

        foreach ($categories as $category) {
            $id = $category->id;
            $label = $category->category;
            $inputId = "category_{$id}";
            $isChecked = in_array($id, $selected) ? 'checked' : '';

            $html .= <<<HTML
            <div class="col-md-6 mb-2">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="{$inputId}" name="categories[]" value="{$id}" {$isChecked}>
                    <label class="form-check-label" for="{$inputId}">{$label}</label>
                </div>
            </div>

            HTML;
        }

        $html .= "</div>\n";
        $html .= '</div>';
        return $html;
    }
}
