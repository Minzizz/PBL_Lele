<?php

namespace App\Http\Controllers;

use App\Models\Kolam;
use Illuminate\Http\Request;

class KolamController extends Controller
{
    public function index()
    {
        $kolams = Kolam::all();
        return view('kolam', compact('kolams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kolam' => 'required',
            'lokasi' => 'required',
            'kapasitas' => 'required',
        ]);

        Kolam::create([
            'nama_kolam' => $request->nama_kolam,
            'lokasi' => $request->lokasi,
            'kapasitas' => $request->kapasitas,
        ]);

        return back()->with('success', 'Kolam berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kolam' => 'required',
            'lokasi' => 'required',
            'kapasitas' => 'required',
        ]);

        $kolam = Kolam::findOrFail($id);

        $kolam->update([
            'nama_kolam' => $request->nama_kolam,
            'lokasi' => $request->lokasi,
            'kapasitas' => $request->kapasitas,
        ]);

        return back()->with('success', 'Kolam berhasil diupdate');
    }

    public function destroy($id)
    {
        Kolam::destroy($id);

        return back()->with('success', 'Kolam berhasil dihapus');
    }
}