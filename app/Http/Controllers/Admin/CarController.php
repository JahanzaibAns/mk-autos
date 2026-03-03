<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarPrice;
use App\Models\CarImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Helpers\GeneralHelper;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    
    public function index()
    {
        $cars = Car::orderBy('id', 'desc')->get();
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }
    
    public function createOrUpdateCar(Request $request, $id = null)
    {
        $validated = $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'model_id' => 'required|exists:models,id',
            'category_id' => 'required|exists:categories,id',
            'body_type_id' => 'required|exists:body_types,id',
            'make_year_id' => 'required|exists:make_years,id',
            'car_location' => 'required|string',
            'car_engine_size' => 'required|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'prices.*.price' => 'nullable|numeric',
            'min_days_booking' => 'nullable|numeric',
            'features' => 'nullable|array',
            'feature_image' => 'nullable|image',
            'image.*' => 'nullable|image',
            'security_deposit' => 'nullable|numeric',
            'delivery_days' => 'nullable|string',
            'delivery_charges' => 'nullable|numeric',
            'exterior_color' => 'nullable|exists:colors,id',
            'interior_color' => 'nullable|exists:colors,id',
            'description' => 'nullable|string',
            'door_id' => 'nullable|exists:doors,id',
            'seat_id' => 'nullable|exists:seats,id',
            'bag_id' => 'nullable|exists:bags,id',
            'spec_id' => 'nullable|exists:specs,id',
            'transmission_id' => 'nullable|exists:transmissions,id',
            'fuel_type_id' => 'nullable|exists:fuel_types,id',
        ]);
    
        DB::beginTransaction();
    
        try {
            $car = $id ? Car::findOrFail($id) : new Car();
    
            $car->fill([
                'model_id' => $request->model_id,
                'category_id' => $request->category_id,
                'body_type_id' => $request->body_type_id,
                'make_year_id' => $request->make_year_id,
                'car_location' => $request->car_location,
                'car_engine_size' => $request->car_engine_size,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'is_featured' => $request->is_featured == 'Featured' ? 1 : 0,
                'min_days_booking' => $request->min_days_booking,
                'security_deposit' => $request->security_deposit,
                'delivery_days' => $request->delivery_days,
                'delivery_charges' => $request->delivery_charges,
                'exterior_color' => $request->exterior_color,
                'interior_color' => $request->interior_color,
                'door_id' => $request->door_id,
                'seat_id' => $request->seat_id,
                'bag_id' => $request->bag_id,
                'spec_id' => $request->spec_id,
                'transmission_id' => $request->transmission_id,
                'fuel_type_id' => $request->fuel_type_id,
                'description' => $request->description,
            ]);
    
            // Slug generation ONLY when creating new car
            if (!$id) {
                $car->slug = GeneralHelper::carSlug($request->model_id, $request->make_year_id);
            }
    
            if ($request->hasFile('feature_image')) {
                $file = $request->file('feature_image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('car_images', $filename, 'public');
                $car->feature_image = $filename;
            }
    
            $car->save();
    
            // Prices
            CarPrice::where('car_id', $car->id)->delete();
            foreach ($request->input('prices', []) as $price) {
                if (!empty($price['price'])) {
                    CarPrice::create([
                        'car_id' => $car->id,
                        'type' => $price['type'],
                        'price' => $price['price'],
                    ]);
                }
            }
    
            // Features
            $car->features()->sync($request->input('features', []));
    
            // Gallery Images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    $filename = time() . '_' . Str::random(6) . '.' . $file->extension();
                    $file->storeAs('car_images', $filename, 'public');
                    CarImage::create([
                        'car_id' => $car->id,
                        'image' => $filename,
                    ]);
                }
            }
    
            DB::commit();
            return redirect()->route('admin.cars.index')->with('success', 'Car saved successfully.');
    
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }



     public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('admin.cars.edit', compact('car'));
    }


    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        if ($car->image && Storage::disk('public')->exists($car->image)) {
            Storage::disk('public')->delete($car->image);
        }

        $car->delete();

        return redirect()->route('admin.cars.index')->with('success', 'Car deleted successfully.');
    }


    public function toggleStatus($id)
    {
        $car = Car::findOrFail($id);
        $car->status = $car->status == 'active' ? 'inactive' : 'active';
        $car->save();

        return redirect()->back()->with('success', 'Car status updated.');
    }
}
