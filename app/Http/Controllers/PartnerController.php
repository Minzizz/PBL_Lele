<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
        {
            $partners = Partner::all();
            return view('partner', compact('partners'));
        }

    public function store(Request $request)
    {
        $logo = null;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('partner', 'public');
        }

        Partner::create([
            'nama_partner' => $request->nama_partner,
            'jenis_usaha' => $request->jenis_usaha,
            'deskripsi' => $request->deskripsi,
            'logo' => $logo
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);

        if ($partner->logo) {
            Storage::disk('public')->delete($partner->logo);
        }

        $partner->delete();

        return redirect()->back();
    }
    public function adminIndex()
    {
        $partners = Partner::all();
        return view('admin.partner_index', compact('partners'));
    }
    
}
