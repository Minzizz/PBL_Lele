<?php

namespace App\Http\Controllers;

use App\Models\Kolam;
use App\Models\Monitoring;
use App\Models\KategoriLele;

class PetugasController extends Controller
{
    public function index()
    {
        return view('petugas', [
            'totalKolam' => Kolam::count(),
            'totalMonitoring' => Monitoring::count(),
            'totalKategori' => KategoriLele::count(),

            'kolams' => Kolam::latest()->get()
        ]);
    }
}