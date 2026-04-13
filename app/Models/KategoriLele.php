<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriLele extends Model
{
        protected $fillable = [
        'nama_kategori',
        'ukuran_minimum',
        'deskripsi',
        'gambar',
    ];
}
