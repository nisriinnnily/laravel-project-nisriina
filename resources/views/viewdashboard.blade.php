@extends('layout.app')

@section('sidebar')
@include('sidebar')
@endsection

@section('navbar')
@include('navbar')
@endsection

@section('content')
<table border="1">
    <tr>
        <td>Nama</td>
        <td>Deskripsi</td>
        <td>Harga</td>
        <td>Jumlah</td>
    </tr>
    @foreach ($data as $d)
    <tr>
        <td>{{$d['Nama']}}</td>
        <td>{{$d['Deskripsi']}}</td>
        <td>{{$d['Harga']}}</td>
        <td>{{$d['Jumlah']}}</td>
    </tr>
    @endforeach
</table>

<br>
<br>
<br>

<table border="1">
    <tr>
        <td>Nama</td>
        <td>Deskripsi</td>
        <td>Harga</td>
        <td>Jumlah</td>
    </tr>
    @foreach ($product as $p)
    <tr>
        <td>{{$p['Nama']}}</td>
        <td>{{$p['Deskripsi']}}</td>
        <td>{{$p['Harga']}}</td>
        <td>{{$p['Jumlah']}}</td>
    </tr>
    @endforeach

</table>
@endsection