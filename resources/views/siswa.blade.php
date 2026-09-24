<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="max-w-6xl mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Data Siswa</h1>
                <p class="text-gray-500 mt-1">Data siswa kelas XI TKJ 1</p>
            </div>
            <a href="{{ route('siswa.tambah') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">+ Tambah Siswa</a>
        </div>

        <div class="bg-white rounded-xl shadow overflow-hidden">
            <table class="w-full">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-5 py-4 text-left">No</th>
                        <th class="px-5 py-4 text-left">Nama</th>
                        <th class="px-5 py-4 text-left">No. Absen</th>
                        <th class="px-5 py-4 text-left">Jurusan</th>
                        <th class="px-5 py-4 text-left">Kelas</th>
                        <th class="px-5 py-4 text-left">Alamat</th>
                        <th class="px-5 py-4 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($siswa as $item)
                    <tr class="border-b hover:bg-gray-50">

                        <td class="px-5 py-4">{{ $loop->iteration }}</td>
                        <td class="px-5 py-4 font-semibold text-gray-800">{{ $item->nama }}</td>
                        <td class="px-5 py-4">{{ $item->no_absen }}</td>
                        <td class="px-5 py-4"> {{ $item->jurusan }}</td>
                        <td class="px-5 py-4">{{ $item->kelas }}</td>
                        <td class="px-5 py-4">{{ $item->alamat }}</td>
                        <td class="px-5 py-4">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('siswa.edit', $item->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-lg text-sm">Edit</a>
                                <a href="{{ route('siswa.delete', $item->id) }}"
                                   class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-sm" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
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