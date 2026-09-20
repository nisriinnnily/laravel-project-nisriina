<form action="{{route('barang.kirim') }}" method = "POST">
    @csrf

    <input type="text" id="name" placeholder="isikan nama" name="nama" required">
    <input type="text" id="harga" placeholder="isikan harga" name="harga" min="0" required">
    <input type="text" id="stock" placeholder="isikan stock" name="stock" min="0" required">
    <input type="submit">
</form>