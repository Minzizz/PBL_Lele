<?php

namespace App\Http\Controllers;

use App\Models\Kolam;

class KolamController extends Controller
{
    public function index()
    {
        $kolams = Kolam::all();

        return view('kolam', compact('kolams'));
    }
}