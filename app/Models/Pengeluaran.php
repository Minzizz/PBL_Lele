<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $fillable = [
        'kuartal',
        'tahun',
        'biaya_pakan',
        'biaya_listrik',
        'biaya_air',
        'biaya_vitamin',
        'total_biaya',
    ];
}
