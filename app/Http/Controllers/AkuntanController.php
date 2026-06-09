<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\Penjualan;

class AkuntanController extends Controller
{
    public function index()
{
    $pengeluarans = Pengeluaran::all();
    $penjualans = Penjualan::all();

    return view('akuntan', compact(
        'pengeluarans',
        'penjualans'
    ));
}
}