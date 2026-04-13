<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    protected $fillable = [
        'tanggal',
        'suhu_air',
        'kondisi_air',
        'ikan_mati',
        'laporan_deskriptif',
    ];
}