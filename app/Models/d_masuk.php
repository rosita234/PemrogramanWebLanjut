<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class d_masuk extends Model
{
    use HasFactory;
    protected $fillable = ['kd_masuk','kd_barang','jumlah','subtotal','harga_beli'];
}
