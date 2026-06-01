<?php

namespace App\Http\Controllers;

use App\Models\KategoriLele;

class LeleController extends Controller
{
    public function index()
    {
        $kategoriLeles = KategoriLele::all();

        return view('lele', compact('kategoriLeles'));
    }
}