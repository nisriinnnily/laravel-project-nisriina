@extends('layout.app')

@section('sidebar')
@include('sidebar')
@endsection

@section('navbar')
@include('navbar')
@endsection

@section('content')
<table class="table-auto border-4 border-collapse text-center font-serif border-pink-200">
    <tr>
        <td class="border-4 border-pink-200">Nama</td>
        <td class="border-4 border-pink-200">Deskripsi</td>
        <td class="border-4 border-pink-200">Harga</td>
        <td class="border-4 border-pink-200">Jumlah</td>
    </tr>
    @foreach ($data as $d)
    <tr>
        <td class="border-4 border-pink-200">{{$d['Nama']}}</td>
        <td class="border-4 border-pink-200">{{$d['Deskripsi']}}</td>
        <td class="border-4 border-pink-200">{{$d['Harga']}}</td>
        <td class="border-4 border-pink-200">{{$d['Jumlah']}}</td>
    </tr>
    @endforeach
</table>

<br>
<br>
<br>

<table class="table-auto border-collapse text-center font-serif border-4 border-pink-200">
    <tr>
        <td class="border-4 border-pink-200">Nama</td>
        <td class="border-4 border-pink-200">Deskripsi</td>
        <td class="border-4 border-pink-200">Harga</td>
        <td class="border-4 border-pink-200">Jumlah</td>
    </tr>
    @foreach ($product as $p)
    <tr>
        <td class="border-4 border-pink-200">{{$p['Nama']}}</td>
        <td class="border-4 border-pink-200">{{$p['Deskripsi']}}</td>
        <td class="border-4 border-pink-200">{{$p['Harga']}}</td>
        <td class="border-4 border-pink-200">{{$p['Jumlah']}}</td>
    </tr>
    @endforeach

</table>
@endsection