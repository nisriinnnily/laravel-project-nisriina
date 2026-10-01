<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();
        return view ('buku',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "judul" => "required|string",
            "penulis" => "required|string",
            "tahun_terbit" => "required|numeric|digits:4",
            "stock" => "required|integer|min:0",
        ]);
        Buku::create($validated);
        return redirect('/buku');
    }
    
        public function store_view()
    {
        return view('buku.tambah');
    }
    /**

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            "judul" => "required|string",
            "penulis" => "required|string",
            "tahun_terbit" => "required|numeric|digits:4",
            "stock" => "required|integer|min:0",
        ]);
        $buku = Buku::find($id);
        $buku->update($validated);
        return redirect('/buku');
    }

    public function update_view($id)
    {
        $buku = Buku::find($id);
        return view('buku.edit', compact ('buku'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}
