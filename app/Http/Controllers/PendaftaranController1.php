<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'konsentrasi' => 'required',
            'nim' => 'required',
            'judul' => 'required',
            'jenis_acara' => 'required',
        ]);

        $pendaftaran = new Pendaftaran();
        $pendaftaran->nama = $request->nama;
        $pendaftaran->konsentrasi = $request->konsentrasi;
        $pendaftaran->nim = $request->nim;
        $pendaftaran->judul = $request->judul;
        $pendaftaran->jenis_acara = $request->jenis_acara;
        $pendaftaran->save();

        return redirect()->back()->with('success', 'Pendaftaran berhasil disimpan.');
    }
}
