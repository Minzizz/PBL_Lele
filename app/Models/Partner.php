<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'nama_partner',
        'jenis_usaha',
        'deskripsi',
        'logo'
    ];
}
