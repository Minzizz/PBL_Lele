<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriLele extends Model
{
    use HasFactory;

    protected $table = 'kategori_leles';

    protected $fillable = [
        'nama_kategori',
        'ukuran_minimum',
        'deskripsi',
        'gambar',
    ];
}