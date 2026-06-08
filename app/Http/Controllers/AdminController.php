<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengeluaran;
use App\Models\Penjualan;

class AdminController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $totalPengeluaran = Pengeluaran::sum('total_biaya');
        $totalPenjualan = Penjualan::sum('total_pendapatan');

        return view('admin', compact(
            'totalUser',
            'totalPengeluaran',
            'totalPenjualan'
        ));
    }
}