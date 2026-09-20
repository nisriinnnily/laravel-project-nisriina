<form action="{{route('barang.update', $barang->id) }}" method = "POST">
    @csrf
    @method('PUT')
    <input type="text" id="name" value="{{ old('nama', $barang->nama) }}" placeholder="isikan nama" name="nama" required">
    <input type="text" id="harga" value="{{ old('harga', $barang->harga) }}" placeholder="isikan harga" name="harga" min="0" required">
    <input type="text" id="stock" value="{{ old('stock', $barang->stock) }}" placeholder="isikan stock" name="stock" min="0" required">
    <input type="submit">
</form>