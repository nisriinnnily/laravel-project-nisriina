@error('nama')
<p>error</p>
<p class="text-red-500">
    {{ $message }}
</p>
@enderror
@error('harga')
<p>error</p>
<p class="text-red-500">
    {{ $message }}
</p>
@enderror
@error('stock')
<p>error</p>
<p class="text-red-500">
    {{ $message }}
</p>
@enderror
<form action="{{route('barang.kirim') }}" method = "POST">
    @csrf
    @method('POST')
    <input type="text" id="nama" placeholder="isikan nama" name="nama" required>
    <input type="text" id="harga" placeholder="isikan harga" name="harga" min="0" required>
    <input type="text" id="stock" placeholder="isikan stock" name="stock" min="0" required>
    <input type="submit">
</form>