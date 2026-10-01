<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="max-w-6xl mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Data Buku</h1>
                <p class="text-gray-500 mt-1">Data buku perpustakaan</p>
            </div>
            <a href="{{ route('buku.tambah') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">+ Tambah Buku</a>
        </div>
        <div class="bg-white rounded-xl shadow overflow-hidden">
            <table class="w-full">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-5 py-4 text-left">No</th>
                        <th class="px-5 py-4 text-left">Judul</th>
                        <th class="px-5 py-4 text-left">Penulis</th>
                        <th class="px-5 py-4 text-left">Tahun Terbit</th>
                        <th class="px-5 py-4 text-left">Stock</th>
                        <th class="px-5 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $item)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-5 py-4">{{ $loop->iteration }}</td>
                        <td class="px-5 py-4 font-semibold text-gray-800">{{ $item->judul }}</td>
                        <td class="px-5 py-4">{{ $item->penulis }}</td>
                        <td class="px-5 py-4">{{ $item->tahun_terbit }}</td>
                        <td class="px-5 py-4">{{ $item->stock }}</td>
                        <td class="px-5 py-4">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('buku.edit', $item->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-lg text-sm font-medium">Edit</a>
                                <a href="{{ route('buku.delete', $item->id) }}" class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-sm font-medium" onclick="return confirm('Yakin mau hapus buku ini?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>