<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'nama_pembeli',
        'no_hp',
        'alamat',
        'jumlah_kg',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}