<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VehicleMetaSeeder extends Seeder
{
    public function run(): void
    {
        $specs = [
            'Asian Specs',
            'GCC Specs',
            'US Specs',
            'European Specs',
            'JDM (Japanese Domestic Market)',
            'International Version',
            'Export Model',
            'Base Model',
            'Full Option'
        ];

        foreach ($specs as $spec) {
            DB::table('specs')->insert(['spec' => $spec]);
        }


        // Features
        $features = [
            '3D Surround Camera',
            'Memory Front Seats',
            'Multimedia',
            'Blind Spot Warning',
            'Parking Assist',
            'Adaptive Cruise Control',
            'Digital HUD',
            'Temperature Controlled Seats',
            'Built-in-GPS',
            'Sunroof/Moonroof',
            'Reverse Camera',
            'Parking Sensors',
            'Steering Assist',
            'Day-time Runing Lights',
            'Touchscreen LCD',
            'Tinted Windows',
            'Paddle Shift(Triptronic)',
            'Powered Tailgate',
            'Power Seats',
            'LCD Screens',
            'Leather Seats',
            'Air Suspension',
            'Gesture Control',
            'Push Button Ignition',
            'SRS Airbags',
            'Front & Rear Airbags',
            'Front Air Bags',
            'Bluetooth',
            'Premium Audio',
            'Rear AC',
            'Power Mirrors',
            'Power Windows',
            'Seat Belt Reminder',
            'Fabric Seats',
            'Alloy Wheels',
            'USB',
            'Apple CarPlay',
            'Android Auto',
            'Power Door Locks',
            'Foldable Armrest',
            'Butterfly Doors',
            'Chiller Freezer',
            'Sliding Doors',
            'Fog-Lights',
            'Climate Control',
            'Detachable Roof',
            'Tail Lift',
            'Massaging Seats',
            'FM-Radio',
            'Stereo MP3 / Cd',
            'AUX'
        ];

        foreach ($features as $feature) {
            DB::table('features')->insert(['feature' => $feature]);
        }


        // Doors
        foreach ([2, 3, 4, 5] as $door) {
            DB::table('doors')->insert(['door' => $door]);
        }

        // Seats
        foreach ([2, 4, 5, 7, 8] as $seat) {
            DB::table('seats')->insert(['seat' => $seat]);
        }

        // Bags (luggage capacity)
        foreach ([1, 2, 3, 4, 5] as $bag) {
            DB::table('bags')->insert(['bag' => $bag]);
        }

        // Transmissions
        $transmissions = ['Automatic', 'Manual', 'CVT', 'Dual-Clutch'];
        foreach ($transmissions as $transmission) {
            DB::table('transmissions')->insert(['transmission' => $transmission]);
        }

        // Fuel Types
        $fuelTypes = ['Petrol', 'Diesel', 'Electric', 'Hybrid'];
        foreach ($fuelTypes as $type) {
            DB::table('fuel_types')->insert(['fuel_type' => $type]);
        }

        $bodyTypes = ['Sedan', 'Hatchback', 'SUV', 'Coupe', 'Convertible', 'Wagon', 'Van', 'Pickup'];

        foreach ($bodyTypes as $type) {
            DB::table('body_types')->insert([
                'body_type' => $type,
                'slug' => Str::slug($type)
            ]);
        }

        // Make Years (2016 to 2025)
        for ($year = 2016; $year <= 2025; $year++) {
            DB::table('make_years')->insert(['year' => $year]);
        }

        // Categories
        $categories = [
            'Economy Cars',
            'Luxury Car Rental Dubai',
            'Sports Car Rental Dubai',
            'Special Edition',
            'Muscle Cars',
            'Electric Cars'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'category' => $category,
                'slug' => Str::slug($category),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }       
}
