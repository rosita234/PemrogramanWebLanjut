<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('d_masuks', function (Blueprint $table) {
            $table->id('id_masuk');
            $table->char('kd_masuk', 4);
            $table->char('kd_barang', 4);
            $table->integer('jumlah');
            $table->decimal('harga_beli', 8, 2);
            $table->decimal('subtotal', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_masuks');
    }
};
