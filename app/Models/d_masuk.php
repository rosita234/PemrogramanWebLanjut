<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class d_masuk extends Model
{
    use HasFactory;
    protected $fillable = ['kd_masuk','kd_barang','jumlah','subtotal','harga_beli'];

    public static function boot()
    {
        parent::boot();

        // Calculate the total before saving
        static::saving(function ($model) {
            $model->subtotal = $model->jumlah * $model->harga_beli;
        });
    }
}
