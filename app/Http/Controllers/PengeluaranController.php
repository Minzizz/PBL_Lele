<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluarans = Pengeluaran::latest()->get();

        return view('pengeluaran', compact('pengeluarans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kuartal' => 'required|integer|min:1|max:4',
            'tahun' => 'required|integer|min:2000',
            'biaya_pakan' => 'required|numeric|min:0',
            'biaya_listrik' => 'required|numeric|min:0',
            'biaya_air' => 'required|numeric|min:0',
            'biaya_vitamin' => 'required|numeric|min:0',
        ]);

        $validated['total_biaya'] =
            $validated['biaya_pakan'] +
            $validated['biaya_listrik'] +
            $validated['biaya_air'] +
            $validated['biaya_vitamin'];

        Pengeluaran::create($validated);

        return redirect()
            ->route('pengeluaran.index')
            ->with('success', 'Data pengeluaran berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);

        return view('pengeluaran_edit', compact('pengeluaran'));
    }

    public function update(Request $request, $id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);

        $validated = $request->validate([
            'kuartal' => 'required|integer|min:1|max:4',
            'tahun' => 'required|integer|min:2000',
            'biaya_pakan' => 'required|numeric|min:0',
            'biaya_listrik' => 'required|numeric|min:0',
            'biaya_air' => 'required|numeric|min:0',
            'biaya_vitamin' => 'required|numeric|min:0',
        ]);

        $validated['total_biaya'] =
            $validated['biaya_pakan'] +
            $validated['biaya_listrik'] +
            $validated['biaya_air'] +
            $validated['biaya_vitamin'];

        $pengeluaran->update($validated);

        return redirect()
            ->route('pengeluaran.index')
            ->with('success', 'Data pengeluaran berhasil diupdate');
    }

    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->delete();

        return redirect()
            ->route('pengeluaran.index')
            ->with('success', 'Data pengeluaran berhasil dihapus');
    }
}