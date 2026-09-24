<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="max-w-2xl mx-auto px-6 py-10">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="bg-blue-600 px-8 py-6">
                <h1 class="text-3xl font-bold text-white">Detail Siswa</h1>
                <p class="text-blue-100 mt-1">Informasi lengkap data siswa</p>
            </div>

            <div class="p-8">
                <div class="space-y-5">
                    <div>
                        <p class="text-sm text-gray-500">Nama</p>
                        <p class="text-lg font-semibold text-gray-800">{{ $siswa->nama }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">No. Absen</p>
                        <p class="text-lg font-semibold text-gray-800">{{ $siswa->no_absen }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Jurusan</p>
                        <p class="text-lg font-semibold text-gray-800">{{ $siswa->jurusan }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Kelas</p>
                        <p class="text-lg font-semibold text-gray-800">{{ $siswa->kelas }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Alamat</p>
                        <p class="text-lg font-semibold text-gray-800">{{ $siswa->alamat }}</p>
                    </div>
                </div>

                <div class="flex gap-3 mt-8">
                    <a href="/siswa" class="flex-1 text-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 rounded-lg">Kembali</a>
                    <a href="{{ route('siswa.edit', $siswa->id) }}" class="flex-1 text-center bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 rounded-lg">Edit Data</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>