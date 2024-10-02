<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('suppliers')->insert([
                'kd_supplier' => 'S' . str_pad($i, 3, '0', STR_PAD_LEFT), 
                'nama_supplier' => $faker->company,
                'alamat' => $faker->address,
            ]);
        }
    }
}
