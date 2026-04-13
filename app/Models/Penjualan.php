<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'tanggal',
        'jumlah_kg',
        'harga_per_kg',
        'total_pendapatan',
        'biaya_operasional',
        'keuntungan',
    ];
}
