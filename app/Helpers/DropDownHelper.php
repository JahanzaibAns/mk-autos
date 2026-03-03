<?php

namespace App\Helpers;

use App\Models\BodyType;
use App\Models\Category;
use App\Models\MakeYear;
use App\Models\Brand;
use App\Models\CarModel;


class DropdownHelper
{
    
    public static function bodyTypeDropdown($selected = null, $class = 'form-select')
    {
        $options = BodyType::pluck('body_type', 'id');

        $html = "<select name=\"body_type_id\" class=\"{$class}\" id=\"body_type_id\">";
        $html .= "<option value=\"\">Select Body Type</option>";

        foreach ($options as $id => $label) {
            $isSelected = ($selected == $id) ? 'selected' : '';
            $html .= "<option value=\"{$id}\" {$isSelected}>{$label}</option>";
        }

        $html .= "</select>";

        return $html;
    }

    public static function categoryDropdown($selected = null, $class = 'form-select')
    {
        $options = Category::pluck('category', 'id');
        
        // $html  = '<div class="row mb-3">';
        $html = '<label for="category_id" class="col-md-4 align-content-center">Car Category</label>';
        $html .= '<div class="col-md-8">';
        $html .= "<select name=\"category_id\" class=\"{$class}\" id=\"category_id\">";
        $html .= "<option value=\"\">Select Category</option>";

        foreach ($options as $id => $label) {
            $isSelected = ($selected == $id) ? 'selected' : '';
            $html .= "<option value=\"{$id}\" {$isSelected}>{$label}</option>";
        }

        $html .= "</select>";
        $html .= '</div>';
        // $html .= '</div>';

        return $html;
    }
 
    public static function makeYearDropdown($selected = null, $class = 'form-select')
    {
        $options = MakeYear::orderByDesc('year')->pluck('year', 'id');

        $html = "<select name=\"make_year_id\" class=\"{$class}\" id=\"make_year_id\">";
        $html .= "<option value=\"\">Select Make Year</option>";

        foreach ($options as $id => $year) {
            $isSelected = ($selected == $id) ? 'selected' : '';
            $html .= "<option value=\"{$id}\" {$isSelected}>{$year}</option>";
        }

        $html .= "</select>";

        return $html;
    }

    public static function brandDropdown($selectedBrand = null)
    {
        $brands = Brand::all();
        $html = '';

        $html .= '<label for="brand_id" class="col-md-4 align-content-center">Car Brand</label>';
        $html .= '<div class="col-md-8">';
        $html .= '<select name="brand_id" id="brand_id" class="form-select">';
        $html .= '<option value="">Select Brand</option>';

        foreach ($brands as $brand) {
            $selected = $selectedBrand == $brand->id ? 'selected' : '';
            $html .= "<option value=\"{$brand->id}\" $selected>{$brand->name}</option>";
        }

        $html .= '</select>';
        $html .= '</div>';

        return $html;
    }

    public static function brandModelDropdown($selectedBrand = null, $selectedModel = null)
    {
        $brands = Brand::with('carModels')->get();
        $html = '';

        // $html .= '<div class="row mb-3 align-items-center">';
        $html .= '<label for="brand_id" class="col-md-4 align-content-center">Car Brand / Model</label>';
        $html .= '<div class="col-md-4">';
        $html .= '<select name="brand_id" id="brand_id" class="form-select" onchange="filterModels(this.value)">';
        $html .= '<option value="">Select Brand</option>';
        foreach ($brands as $brand) {
            $selected = $selectedBrand == $brand->id ? 'selected' : '';
            $html .= "<option value=\"{$brand->id}\" $selected>{$brand->name}</option>";
        }
        $html .= '</select>';
        $html .= '</div>';
        $html .= '<div class="col-md-4">';
        $html .= '<select name="model_id" id="model_id" class="form-select">';
        $html .= '<option value="">Select Model</option>';

        if ($selectedBrand) {
            $models = CarModel::where('brand_id', $selectedBrand)->get();
            foreach ($models as $model) {
                $selected = $selectedModel == $model->id ? 'selected' : '';
                $html .= "<option value=\"{$model->id}\" $selected>{$model->name}</option>";
            }
        }

        $html .= '</select>';
        $html .= '</div>';
        // $html .= '</div>';

        // JavaScript
        $brandModels = [];
        foreach ($brands as $brand) {
            $brandModels[$brand->id] = $brand->carModels->map(function ($m) {
                return ['id' => $m->id, 'name' => $m->name];
            });
        }

        $html .= '<script>
            const brandModels = '.json_encode($brandModels).';

            function filterModels(brandId) {
                const modelSelect = document.getElementById("model_id");
                modelSelect.innerHTML = `<option value="">Select Model</option>`;

                if (brandModels[brandId]) {
                    brandModels[brandId].forEach(model => {
                        const option = document.createElement("option");
                        option.value = model.id;
                        option.textContent = model.name;
                        modelSelect.appendChild(option);
                    });
                }
            }
        </script>';

        return $html;
    }
}
