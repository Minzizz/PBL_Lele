<?php

namespace App\Http\Controllers;

use App\Models\Kolam;
use App\Models\Monitoring;
use App\Models\KategoriLele;

class PetugasController extends Controller
{
    public function index()
    {
        $kolams = Kolam::all();
        $monitorings = Monitoring::all();
        $kategoriLeles = KategoriLele::all();

        return view('petugas', compact(
            'kolams',
            'monitorings',
            'kategoriLeles'
        ));
    }
}