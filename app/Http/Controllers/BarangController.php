<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view ('barang',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = new barang();
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stock = $request->stock;

        $barang->save();

        return redirect('/barang');
    }

        public function store_view()
    {
        return view('barang.tambah');
    }
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
        $barang = Barang::find($id);
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stock = $request->stock;

        $barang->save();
        return redirect('/barang');
    }
        public function update_view($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact ('barang'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);

        $barang->delete();
        return redirect('/barang');
    }
}
