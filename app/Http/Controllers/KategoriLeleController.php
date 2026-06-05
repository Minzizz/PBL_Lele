<?php

namespace App\Http\Controllers;

use App\Models\KategoriLele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriLeleController extends Controller
{
    public function index()
    {
        $kategoriLeles = KategoriLele::all();

        return view('kategori_lele', compact('kategoriLeles'));
    }

    public function store(Request $request)
    {
        $gambar = null;

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar')->store('lele','public');
        }

        KategoriLele::create([
            'nama_kategori' => $request->nama_kategori,
            'ukuran_minimum' => $request->ukuran_minimum,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar
        ]);

        return redirect()->route('lele.index');
    }

    public function update(Request $request, $id)
    {
        $lele = KategoriLele::findOrFail($id);

        $data = [
            'nama_kategori' => $request->nama_kategori,
            'ukuran_minimum' => $request->ukuran_minimum,
            'deskripsi' => $request->deskripsi,
        ];

        if($request->hasFile('gambar'))
        {
            if($lele->gambar){
                Storage::disk('public')->delete($lele->gambar);
            }

            $data['gambar'] =
                $request->file('gambar')->store('lele','public');
        }

        $lele->update($data);

        return redirect()->route('lele.index');
    }

    public function destroy($id)
    {
        $lele = KategoriLele::findOrFail($id);

        if($lele->gambar){
            Storage::disk('public')->delete($lele->gambar);
        }

        $lele->delete();

        return redirect()->route('lele.index');
    }
}