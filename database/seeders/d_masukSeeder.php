<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class d_masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('d_masuks')->insert([
                'kd_masuk' => 'KM001',
                'kd_barang' => 'KS' . str_pad($faker->numberBetween(1, 50), 3, '0', STR_PAD_LEFT),    
                'jumlah' => $faker->numberBetween(1, 100),              
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            DB::table('d_masuks')->insert([
                'kd_masuk' => 'KM002',
                'kd_barang' => 'KS' . str_pad($faker->numberBetween(1, 50), 3, '0', STR_PAD_LEFT),    
                'jumlah' => $faker->numberBetween(1, 100),              
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            DB::table('d_masuks')->insert([
                'kd_masuk' => 'KM003',
                'kd_barang' => 'KS' . str_pad($faker->numberBetween(1, 50), 3, '0', STR_PAD_LEFT),    
                'jumlah' => $faker->numberBetween(1, 100),              
            ]);
        }
    }
}
