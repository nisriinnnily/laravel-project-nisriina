<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Departemen;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = Pegawai::with('departemen')->get();
        $departemens = Departemen::withCount('pegawais')->get();
        return view('pegawai.index', compact('pegawais', 'departemens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departemens = Departemen::all();
        return view('pegawai.create',  compact('departemens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['departemen_id' =>'required|exists:departemens,id', 'nama' => 'required','jabatan' => 'required',
    ]);
        Pegawai::create($request->all());
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pegawai = Pegawai::with('departemen')->findOrFail($id);
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $departemens = Departemen::all();
        return view('pegawai.edit', compact('pegawai', 'departemens'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'departemen_id' => 'required|exists:departemens,id',
        'nama' => 'required',
        'jabatan' => 'required',
    ]);
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());
        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index');
    }
}
