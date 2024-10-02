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
        Schema::create('masuks', function (Blueprint $table) {
            $table->id()->primary();
            $table->char("kd_masuk", 5);
            $table->date("tgl_masuk");
            $table->char("kd_supplier", 5);
            $table->decimal("total_masuk");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masuks');
    }
};
