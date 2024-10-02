<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('barangs')->insert([
                'kd_barang' => 'KB' . str_pad($i, 3, '0', STR_PAD_LEFT), 
                'nama_barang' => $faker->word,
                'satuan' => "pcs",
                'harga_jual' => $faker->numberBetween(10000, 100000), 
                'harga_beli' => $faker->numberBetween(5000, 10000), 
                'stok' => $faker->numberBetween(1, 100),
                'status' => "ada",
            ]);
        }
    }
}
