<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    public function create($id)
    {
        $product = Product::findOrFail($id);

        return view('order.create', compact('product'));
    }

    public function store(Request $request)
    {
        Order::create([
            'nama_pembeli' => $request->nama_pembeli,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jumlah_kg' => $request->jumlah_kg,
            'product_id' => $request->product_id,
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil dibuat!');
    }
}