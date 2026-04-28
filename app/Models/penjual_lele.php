<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penjual_lele extends Model
{
    protected $fillable = [
        'id_penjual',
        'nama_penjual',
        'alamat',
        'no_telepon',
    ];

    protected $table = 'penjual_lele';
}
