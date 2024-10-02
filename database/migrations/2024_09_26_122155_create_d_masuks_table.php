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
            $table->id()->primary();
            $table->char("kd_masuk", length:5);
            $table->char("kd_barang", length:5);
            $table->integer("jumlah");
            $table->decimal("harga_beli");
            $table->decimal("subtotal");
            $table->timestamps();
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
