<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    function add() {
        return view('addMahasiswa');
    }

    function store(Request $request) {
        $request->validate([
            'NIM' => ['required', 'numeric', 'digits:10'],
            'Nama' => ['required', 'min:5'],
            'Foto' => ['required', 'image']
        ]);

        $filename = $request->file('Foto')->getClientOriginalName();
        $request->file('Foto')->storeAs('public/'.$filename);

        Mahasiswa::create([
            'NIM' => $request->NIM,
            'Nama' => $request->Nama,
            'Foto' => $filename
        ]);

        return redirect('/data-mahasiswa');
    }

    function dataMahasiswa() {
        $mahasiswas = Mahasiswa::all();
        return view('dataMahasiswa', compact('mahasiswas'));
    }

    function edit($id) {
        $mahasiswa = Mahasiswa::find($id);
        return view('editMahasiswa', compact('mahasiswa'));
    }

    function update(Request $request, $id) {
        $request->validate([
            'NIM' => ['required', 'numeric', 'digits:10'],
            'Nama' => ['required', 'min:5'],
            'Foto' => ['required', 'image']
        ]);

        $filename = $request->file('Foto')->getClientOriginalName();
        $request->file('Foto')->storeAs('public/'.$filename);

        Mahasiswa::find($id)->update([
            'NIM' => $request->NIM,
            'Nama' => $request->Nama,
            'Foto' => $filename
        ]);

        return redirect('/data-mahasiswa');
    }

    function delete($id) {
        $mahasiswa = Mahasiswa::find($id);
        Mahasiswa::destroy($id);
        Storage::delete('/public'.'/'.$mahasiswa->Foto);
        return redirect('/data-mahasiswa');
    }
}
