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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id('kd_barang')->primary();
            $table->string('nama_barang', 30); 
            $table->integer('satuan'); 
            $table->decimal('harga_beli', 8, 2);
            $table->decimal('harga_jual', 8, 2);
            $table->integer('stok'); 
            $table->string('status', 5);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
