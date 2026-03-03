<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\BrandsTableSeeder; 
use Database\Seeders\ModelsTableSeeder;
use Database\Seeders\ColorsTableSeeder;
use Database\Seeders\VehicleMetaSeeder;  

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@driftcarrental.com',
            'password' => bcrypt('12345678'),
        ]);

        $this->call([
            BrandsTableSeeder::class,
        ]);
        $this->call([
            ModelsTableSeeder::class,
        ]);

        $this->call([
            ColorsTableSeeder::class,
        ]);

        $this->call([
            VehicleMetaSeeder::class,
        ]);
    }
}
