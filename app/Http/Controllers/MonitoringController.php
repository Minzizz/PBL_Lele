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
        Monitoring::create([
            'tanggal' => $request->tanggal,
            'suhu_air' => $request->suhu_air,
            'kondisi_air' => $request->kondisi_air,
            'ikan_mati' => $request->ikan_mati,
            'laporan_deskriptif' => $request->laporan_deskriptif,
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $monitoring = Monitoring::findOrFail($id);

        $monitoring->update([
            'tanggal' => $request->tanggal,
            'suhu_air' => $request->suhu_air,
            'kondisi_air' => $request->kondisi_air,
            'ikan_mati' => $request->ikan_mati,
            'laporan_deskriptif' => $request->laporan_deskriptif,
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        Monitoring::findOrFail($id)->delete();

        return redirect()->back();
    }
}