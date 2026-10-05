<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="max-w-2xl mx-auto px-6 py-10">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Detail Pegawai</h1>
            <p class="text-gray-500 mb-8">Informasi lengkap data pegawai</p>

            <div class="space-y-5">
                <div>
                    <p class="text-sm text-gray-500">Nama</p>
                    <p class="text-lg font-semibold text-gray-800">{{ $pegawai->nama }}</p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Departemen</p>
                    <p class="text-lg font-semibold text-gray-800">{{ $pegawai->departemen->nama }}</p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Jabatan</p>
                    <p class="text-lg font-semibold text-gray-800">{{ $pegawai->jabatan }}</p>
                </div>
            </div>

            <div class="flex gap-3 mt-8">
                <a href="{{ route('pegawai.index') }}" class="w-1/2 text-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 rounded-lg">Kembali</a>
                <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="w-1/2 text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg">Edit Data</a>
            </div>
        </div>
    </div>
</body>
</html>