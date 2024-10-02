<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = ['kd_barang','nama_barang','satuan','harga_jual','harga_beli', 'status', 'stok'];
}
