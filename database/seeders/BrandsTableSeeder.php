<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Alfa Romeo', 'slug' => 'alfa-romeo', 'image' => '1691580996.png'],
            ['name' => 'Aston Martin', 'slug' => 'aston-martin', 'image' => '1691581199.png'],
            ['name' => 'Audi', 'slug' => 'audi', 'image' => '1691581326.png'],
            ['name' => 'Bentley', 'slug' => 'bentley', 'image' => '1691581461.png'],
            ['name' => 'BMW', 'slug' => 'bmw', 'image' => '1691581559.png'],
            ['name' => 'Cadillac', 'slug' => 'cadillac', 'image' => '1691581652.webp'],
            ['name' => 'Chevrolet', 'slug' => 'chevrolet', 'image' => '1691581744.png'],
            ['name' => 'Chrysler', 'slug' => 'chrysler', 'image' => '1691581791.png'],
            ['name' => 'Citroen', 'slug' => 'citroen', 'image' => '1691581832.png'],
            ['name' => 'Dodge', 'slug' => 'dodge', 'image' => '1691581933.png'],
            ['name' => 'Ferrari', 'slug' => 'ferrari', 'image' => '1691582017.png'],
            ['name' => 'Fiat', 'slug' => 'fiat', 'image' => '1691582269.png'],
            ['name' => 'Ford', 'slug' => 'ford', 'image' => '1691582306.png'],
            ['name' => 'GAC', 'slug' => 'gac', 'image' => '1691582355.png'],
            ['name' => 'Genesis', 'slug' => 'genesis', 'image' => '1691582394.png'],
            ['name' => 'GMC', 'slug' => 'gmc', 'image' => '1691582446.png'],
            ['name' => 'Honda', 'slug' => 'honda', 'image' => '1691582498.png'],
            ['name' => 'Hongqi', 'slug' => 'hongqi', 'image' => '1691582534.webp'],
            ['name' => 'Hyundai', 'slug' => 'hyundai', 'image' => '1691582571.png'],
            ['name' => 'Infiniti', 'slug' => 'infiniti', 'image' => '1691582602.webp'],
            ['name' => 'JAC', 'slug' => 'jac', 'image' => '1691582636.png'],
            ['name' => 'Jaguar', 'slug' => 'jaguar', 'image' => '1691582673.png'],
            ['name' => 'Jeep', 'slug' => 'jeep', 'image' => '1691582707.png'],
            ['name' => 'Kia', 'slug' => 'kia', 'image' => '1691582742.png'],
            ['name' => 'Lamborghini', 'slug' => 'lamborghini', 'image' => '1691582770.png'],
            ['name' => 'Land Rover', 'slug' => 'land-rover', 'image' => '1691582812.webp'],
            ['name' => 'Lexus', 'slug' => 'lexus', 'image' => '1691582842.png'],
            ['name' => 'Lincoln', 'slug' => 'lincoln', 'image' => '1691582875.png'],
            ['name' => 'Maserati', 'slug' => 'maserati', 'image' => '1691582919.png'],
            ['name' => 'Mazda', 'slug' => 'mazda', 'image' => '1691582947.png'],
            ['name' => 'McLaren', 'slug' => 'mclaren', 'image' => '1691582979.png'],
            ['name' => 'Mercedes Benz', 'slug' => 'mercedes-benz', 'image' => '1691583010.webp'],
            ['name' => 'MG', 'slug' => 'mg', 'image' => '1691583053.png'],
            ['name' => 'Mini', 'slug' => 'mini', 'image' => '1691583084.png'],
            ['name' => 'Mitsubishi', 'slug' => 'mitsubishi', 'image' => '1691583137.png'],
            ['name' => 'Nissan', 'slug' => 'nissan', 'image' => '1691583173.png'],
            ['name' => 'Opel', 'slug' => 'opel', 'image' => '1691583205.webp'],
            ['name' => 'Peugeot', 'slug' => 'peugeot', 'image' => '1691583249.png'],
            ['name' => 'Polaris', 'slug' => 'polaris', 'image' => '1691583278.webp'],
            ['name' => 'Porsche', 'slug' => 'porsche', 'image' => '1691583317.png'],
            ['name' => 'Renault', 'slug' => 'renault', 'image' => '1691583355.png'],
            ['name' => 'Rolls Royce', 'slug' => 'rolls-royce', 'image' => '1691583390.png'],
            ['name' => 'Suzuki', 'slug' => 'suzuki', 'image' => '1691583426.png'],
            ['name' => 'Tesla', 'slug' => 'tesla', 'image' => '1691583461.png'],
            ['name' => 'Toyota', 'slug' => 'toyota', 'image' => '1691583488.webp'],
            ['name' => 'Volkswagen', 'slug' => 'volkswagen', 'image' => '1691584311.png'],
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->insert([
                'name' => $brand['name'],
                'slug' => $brand['slug'],
                'image' => $brand['image'],
                'description' => null,
                'meta_title' => null,
                'meta_description' => null,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
