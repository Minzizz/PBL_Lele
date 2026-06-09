<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoring;

class MonitoringController extends Controller
{
    public function index()
    {
        $monitorings = Monitoring::all();

        return view('monitoring', compact('monitorings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'suhu_air' => 'nullable|numeric',
            'kondisi_air' => 'nullable|string',
            'ikan_mati' => 'nullable|integer',
            'laporan_deskriptif' => 'nullable|string',
        ]);

        Monitoring::create([
            'tanggal' => $request->tanggal,
            'suhu_air' => $request->suhu_air,
            'kondisi_air' => $request->kondisi_air,
            'ikan_mati' => $request->ikan_mati,
            'laporan_deskriptif' => $request->laporan_deskriptif,
        ]);

        return redirect()->back()->with('success', 'Data monitoring ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $monitoring = Monitoring::findOrFail($id);

        $request->validate([
            'tanggal' => 'required|date',
            'suhu_air' => 'nullable|numeric',
            'kondisi_air' => 'nullable|string',
            'ikan_mati' => 'nullable|integer',
            'laporan_deskriptif' => 'nullable|string',
        ]);

        $monitoring->update([
            'tanggal' => $request->tanggal,
            'suhu_air' => $request->suhu_air,
            'kondisi_air' => $request->kondisi_air,
            'ikan_mati' => $request->ikan_mati,
            'laporan_deskriptif' => $request->laporan_deskriptif,
        ]);

        return redirect()->back()->with('success', 'Data monitoring diupdate');
    }

    public function destroy($id)
    {
        $monitoring = Monitoring::findOrFail($id);
        $monitoring->delete();

        return redirect()->back()->with('success', 'Data monitoring dihapus');
    }
}