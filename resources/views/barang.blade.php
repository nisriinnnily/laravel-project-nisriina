<table border =1>
    <tr>
        <td>id</td>
        <td>nama</td>
        <td>harga</td>
        <td>stock</td>
        <td>action</td>
    </tr>
    @foreach ($barang as $b)
    <tr>
        <td>{{$b['id']}}</td>
        <td>{{$b['nama']}}</td>
        <td>{{$b['harga']}}</td>
        <td>{{$b['stock']}}</td>
        <td>
            <a href="{{ route('barang.edit', $b->id) }}">edit</a>
            <a href="{{ route('barang.delete', $b->id) }}">hapus</a>
        </td>
    </tr>
    @endforeach
</table>
<br>

<a href="{{ route('barang.tambah') }}">tambah</a>