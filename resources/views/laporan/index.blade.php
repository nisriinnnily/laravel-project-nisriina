<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="max-w-6xl mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Laporan Pegawai</h1>
                <p class="text-gray-500 mt-1">Jumlah pegawai berdasarkan departemen</p>
            </div>
            <a href="{{ route('pegawai.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-5 py-3 rounded-lg font-semibold">← Data Pegawai</a>
        </div>

        <div class="bg-white rounded-xl shadow overflow-hidden">
            <table class="w-full">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-5 py-4 text-left">No</th>
                        <th class="px-5 py-4 text-left">Nama Departemen</th>
                        <th class="px-5 py-4 text-left">Jumlah Pegawai</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($departemens as $k)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-5 py-4">{{ $loop->iteration }}</td>
                        <td class="px-5 py-4 font-semibold text-gray-800">{{ $k->nama }}</td>
                        <td class="px-5 py-4">{{ $k->pegawais_count }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>