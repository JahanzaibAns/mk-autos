<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{
    public function run(): void
    {
        $colors = [
            ['color' => 'White', 'value' => '#FFFFFF'],
            ['color' => 'Black', 'value' => '#000000'],
            ['color' => 'Gray', 'value' => '#808080'],
            ['color' => 'Silver', 'value' => '#C0C0C0'],
            ['color' => 'Blue', 'value' => '#0000FF'],
            ['color' => 'Red', 'value' => '#FF0000'],
            ['color' => 'Brown', 'value' => '#8B4513'],
            ['color' => 'Green', 'value' => '#008000'],
            ['color' => 'Orange', 'value' => '#FFA500'],
            ['color' => 'Beige', 'value' => '#F5F5DC'],
            ['color' => 'Purple', 'value' => '#800080'],
            ['color' => 'Gold', 'value' => '#FFD700'],
            ['color' => 'Yellow', 'value' => '#FFFF00'],
            ['color' => 'Maroon', 'value' => '#800000'],
        ];

        DB::table('colors')->insert($colors);
    }
}
