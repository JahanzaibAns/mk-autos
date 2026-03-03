<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Brand;

class ModelsTableSeeder extends Seeder
{
    public function run(): void
    {
        $brandModels = [
            'Alfa Romeo' => ['Giulietta'],
            'Aston Martin' => ['Vantage', 'DB11'],
            'Audi' => ['A3', 'A6', 'RS', 'Q8'],
            'Bentley' => ['Bentayga', 'Continental'],
            'BMW' => ['420i convertible'],
            'Cadillac' => ['Escalade Platinum'],
            'Chevrolet' => ['Captiva', 'Corvette'],
            'Chrysler' => ['300C'],
            'Citroen' => ['C5', 'C3'],
            'Dodge' => ['Challenger V6', 'Charger'],
            'Ferrari' => ['F8 Tributo', 'Portofino'],
            'Fiat' => ['Abarth Spyder 124'],
            'Ford' => ['Mustang EcoBoost'],
            'GAC' => ['Emkoo'],
            'Genesis' => ['GV80', 'GV70', 'G70'],
            'GMC' => ['Yukon', 'Yukon Denali'],
            'Honda' => ['Civic', 'Accord', 'CR-V'],
            'Hongqi' => ['H5', 'H7 Elite', 'H7 Comfort'],
            'Hyundai' => ['Accent', 'Creta 5-seater'],
            'Infiniti' => ['Q50', 'QX60', 'QX50'],
            'JAC' => ['J7', 'JS3', 'JS4', 'S4'],
            'Jaguar' => ['F Pace'],
            'Jeep' => ['Wrangler Unlimited'],
            'Kia' => ['Sportage', 'Seltos'],
            'Lamborghini' => ['Huracan Evo Spyder'],
            'Land Rover' => ['Range Rover Sport'],
            'Lexus' => ['IS Series', 'LX 600'],
            'Lincoln' => ['Navigator'],
            'Maserati' => ['Levante', 'Quattroporte'],
            'Mazda' => ['6', 'CX5', '3 Sedan'],
            'McLaren' => ['570S Spyder', '720S'],
            'Mercedes Benz' => ['AMG G63', 'C300', 'C200'],
            'MG' => ['ZS', '5', 'GT', 'RX8', 'HS'],
            'Mini' => ['Cooper', 'Cooper S 5-Door'],
            'Mitsubishi' => ['Attrage', 'ASX', 'Pajero'],
            'Nissan' => ['Sunny', 'Patrol', 'Pathfinder'],
            'Opel' => ['Zafira 9S', 'Zafira Life'],
            'Peugeot' => ['3008', '508', '2008'],
            'Polaris' => ['Slingshot R Limited'],
            'Porsche' => ['Cayenne Coupe', 'Macan'],
            'Renault' => ['Duster', 'Symbol', 'Koleos'],
            'Rolls Royce' => ['Dawn', 'Cullinan', 'Phantom'],
            'Suzuki' => ['Ciaz', 'Baleno', 'Ertiga'],
            'Tesla' => ['Model 3 Standard'],
            'Toyota' => ['Corolla', 'Rush', 'Yaris'],
            'Volkswagen' => ['Teramont', 'T-Roc'],
        ];

        foreach ($brandModels as $brandName => $models) {
            $brand = DB::table('brands')->where('name', $brandName)->first();

            if (!$brand) {
                $this->command->warn("Brand '$brandName' not found. Skipping...");
                continue;
            }

            foreach ($models as $modelName) {
                DB::table('models')->insert([
                    'brand_id' => $brand->id,
                    'name' => $modelName,
                    'slug' => Str::slug($modelName),
                    'description' => null,
                    'image' => null,
                    'meta_title' => null,
                    'meta_description' => null,
                    'status' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
