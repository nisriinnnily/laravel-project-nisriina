<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $siswa = new siswa();
        $siswa->nama = $request->nama;
        $siswa->no_absen = $request->no_absen;
        $siswa->jurusan = $request->jurusan;
        $siswa->kelas = $request->kelas;
        $siswa->alamat = $request->alamat;

        $siswa->save();

        return redirect('/siswa');
    }

    public function store_view()
    {
        return view('siswa.tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->no_absen = $request->no_absen;
        $siswa->jurusan = $request->jurusan;
        $siswa->kelas = $request->kelas;
        $siswa->alamat = $request->alamat;

        $siswa->save();
        return redirect('/siswa');
    }

    public function update_view($id)
    {
        $siswa = Siswa::find($id);

        return view('siswa.edit', compact('siswa'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('/siswa');
    }
}
