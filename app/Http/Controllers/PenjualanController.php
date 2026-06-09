<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::all();

        return view('penjualan', compact('penjualans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'jumlah_kg' => 'required|numeric',
            'harga_per_kg' => 'required|numeric',
            'biaya_operasional' => 'required|numeric',
        ]);

        $totalPendapatan =
            $request->jumlah_kg *
            $request->harga_per_kg;

        $keuntungan =
            $totalPendapatan -
            $request->biaya_operasional;

        Penjualan::create([
            'tanggal' => $request->tanggal,
            'jumlah_kg' => $request->jumlah_kg,
            'harga_per_kg' => $request->harga_per_kg,
            'total_pendapatan' => $totalPendapatan,
            'biaya_operasional' => $request->biaya_operasional,
            'keuntungan' => $keuntungan,
        ]);

        return redirect()
            ->route('penjualan.index')
            ->with('success', 'Data berhasil ditambahkan');
    }
}