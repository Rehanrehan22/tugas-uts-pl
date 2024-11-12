<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:20|unique:siswas',
            'kelas' => 'required|string|max:10',
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswa.create')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:20|unique:siswas,nis,' . $siswa->id,
            'kelas' => 'required|string|max:10',
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswa.create')->with('success', 'Siswa berhasil diperbarui.');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.create')->with('success', 'Siswa berhasil dihapus.');
    }
}