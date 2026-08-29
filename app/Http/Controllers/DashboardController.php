<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $data =[
            ['Nama' => 'Keyboard', 'Deskripsi' => 'Keyboard Murah', 'Harga' => '1000000', 'Jumlah' => '100'],
            ['Nama' => 'Mouse', 'Deskripsi' => 'Mouse Murah', 'Harga' => '70000', 'Jumlah' => '70'],
            ['Nama' => 'Laptop', 'Deskripsi' => 'Laptop Murah', 'Harga' => '15000000', 'Jumlah' => '5'],
            ['Nama' => 'Handphone', 'Deskripsi' => 'Handphone Murah', 'Harga' => '3000000', 'Jumlah' => '7'],
            ['Nama' => 'Router', 'Deskripsi' => 'Router Murah', 'Harga' => '500000', 'Jumlah' => '100'],
            ];

        $product =[
            ['Nama' => 'Pensil', 'Deskripsi' => 'Pensil Murah', 'Harga' => '2000', 'Jumlah' => '10'],
            ['Nama' => 'Pulpen', 'Deskripsi' => 'Pulpen Murah', 'Harga' => '3000', 'Jumlah' => '12'],
            ['Nama' => 'Penghapus', 'Deskripsi' => 'Penghapus Murah', 'Harga' => '1000', 'Jumlah' => '15'],
            ['Nama' => 'Serutan', 'Deskripsi' => 'Serutan', 'Harga' => '1000', 'Jumlah' => '6'],
            ['Nama' => 'Tip-X', 'Deskripsi' => 'Tip-X Murah', 'Harga' => '5000', 'Jumlah' => '17'],
            ['Nama' => 'Buku', 'Deskripsi' => 'Buku Murah', 'Harga' => '12000', 'Jumlah' => '24'],
            ['Nama' => 'Sampul', 'Deskripsi' => 'Sampul Murah', 'Harga' => '6000', 'Jumlah' => '26'],
            ['Nama' => 'Sampul Putih', 'Deskripsi' => 'Sampul Putih Murah', 'Harga' => '6500', 'Jumlah' => '26'],
            ['Nama' => 'Penggaris', 'Deskripsi' => 'Penggaris Murah', 'Harga' => '5000', 'Jumlah' => '7'],
            ['Nama' => 'Spidol', 'Deskripsi' => 'Spidol Murah', 'Harga' => '8000', 'Jumlah' => '11'],
        ];
        return view('viewdashboard', compact('data'), compact('product'));
    }
}

