<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('adminpartner', compact('partners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_partner' => 'required',
        ]);

        $logo = null;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('partner', 'public');
        }

        Partner::create([
            'nama_partner' => $request->nama_partner,
            'jenis_usaha' => $request->jenis_usaha,
            'deskripsi' => $request->deskripsi,
            'logo' => $logo,
        ]);

        return redirect()->back()->with('success', 'Partner berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        $data = [
            'nama_partner' => $request->nama_partner,
            'jenis_usaha' => $request->jenis_usaha,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('logo')) {
            if ($partner->logo) {
                Storage::disk('public')->delete($partner->logo);
            }

            $data['logo'] = $request->file('logo')->store('partner', 'public');
        }

        $partner->update($data);

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);

        if ($partner->logo) {
            Storage::disk('public')->delete($partner->logo);
        }

        $partner->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
