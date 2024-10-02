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
            $table->id()->primary();
            $table->char("kd_barang", length:5);   
            $table->string("nama_barang", length:30); 
            $table->char("satuan"); 
            $table->decimal("harga_beli");
            $table->decimal("harga_jual");
            $table->integer("stok"); 
            $table->string("status", length:5);
            $table->timestamps();
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
