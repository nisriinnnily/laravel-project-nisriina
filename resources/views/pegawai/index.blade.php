<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="max-w-6xl mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Data Pegawai</h1>
                <p class="text-gray-500 mt-1">Data pegawai dan departemen</p>
            </div>
            <a href="{{ route('pegawai.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">+ Tambah Pegawai</a>
        </div>

        <div class="bg-white rounded-xl shadow overflow-hidden">
            <table class="w-full">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-5 py-4 text-left">No</th>
                        <th class="px-5 py-4 text-left">Nama</th>
                        <th class="px-5 py-4 text-left">Departemen</th>
                        <th class="px-5 py-4 text-left">Jabatan</th>
                        <th class="px-5 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawais as $b)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-5 py-4">{{ $loop->iteration }}</td>
                        <td class="px-5 py-4 font-semibold text-gray-800">{{ $b->nama }}</td>
                        <td class="px-5 py-4">{{ $b->departemen->nama }}</td>
                        <td class="px-5 py-4">{{ $b->jabatan }}</td>

                        <td class="px-5 py-4">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('pegawai.show', $b->id) }}" class="bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium"> Detail</a>
                                <a href="{{ route('pegawai.edit', $b->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-lg text-sm font-medium">Edit</a>
                                <form action="{{ route('pegawai.destroy', $b->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin mau hapus pegawai ini?')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-sm font-medium">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="bg-white rounded-xl shadow mt-8 p-6 flex justify-between items-center">
            <div>
                <h2 class="text-xl font-bold text-gray-800">Laporan Pegawai</h2>
                <p class="text-gray-500 mt-1">Lihat jumlah pegawai berdasarkan departemen</p>
            </div>
        <a href="/laporan" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">Lihat Laporan →</a>
        </div>
    </div>
</body>
</html>