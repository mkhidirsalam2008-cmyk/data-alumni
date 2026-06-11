<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function show($id)
{
    $alumni = Alumni::findOrFail($id);

    return view('admin.detail', compact('alumni'));
}
    public function index(Request $request)
{
    $search = $request->search;

    $alumni = Alumni::when($search, function ($query) use ($search) {

        $query->where('nama_gelar', 'like', "%{$search}%")
              ->orWhere('tahun_angkatan', 'like', "%{$search}%")
              ->orWhere('institusi', 'like', "%{$search}%");

    })
    ->latest()
    ->paginate(10)
    ->withQueryString();

    return view('admin.dashboard', compact('alumni'));
}

    public function create()
    {
        return view('alumni.form');
    }
    public function store(Request $request)
{
    $data = $request->validate([
        'nama_gelar' => 'required',
        'tahun_angkatan' => 'required',
        'nim_3_digit' => 'required',
        'jenis_kelamin' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'no_hp' => 'required',
        'no_whatsapp' => 'required',
        'provinsi' => 'required',
        'kota_kabupaten' => 'required',
        'kecamatan' => 'required',
        'kelurahan' => 'required',
        'alamat' => 'required',
        'institusi' => 'required',
        'jabatan' => 'required',
        'alamat_kerja' => 'required',
        'bidang_keahlian' => 'required',
        'hobi' => 'required',
        'pesan_harapan' => 'required',
    ]);

    if ($request->hasFile('foto')) {
        $data['foto'] =
            $request->file('foto')
                    ->store('foto-alumni', 'public');
    }

    Alumni::create($data);

   return redirect()
    ->route('alumni.berhasil')
    ->with('success', true);
}
}
