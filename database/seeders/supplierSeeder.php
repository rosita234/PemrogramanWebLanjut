<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('suppliers')->insert([
                'kd_supplier' => $faker->unique()->randomNumber(4, true),
                'nama_supplier' => $faker->company(),
                'alamat' => $faker->address(),
            ]);
        }
    }
}
