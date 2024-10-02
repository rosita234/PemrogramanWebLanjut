<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        DB::table('masuks')->insert([
            'kd_masuk' => 'KM001',
            'tgl_masuk' => $faker->date(),
            'kd_supplier' => 'KS001',
            'total_masuk' => 10,
        ]);

        DB::table('masuks')->insert([
            'kd_masuk' => 'KM002',
            'tgl_masuk' => $faker->date(),
            'kd_supplier' => 'KS002',
            'total_masuk' => 10,
        ]);

        DB::table('masuks')->insert([
            'kd_masuk' => 'KM003',
            'tgl_masuk' => $faker->date(),
            'kd_supplier' => 'KS003',
            'total_masuk' => 10,
        ]);
    }
}
