<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="max-w-2xl mx-auto px-6 py-10">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Edit Data Siswa</h1>
            <p class="text-gray-500 mb-8">Ubah data siswa sesuai kebutuhan</p>
            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Nama</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama', $siswa->nama) }}" placeholder="Nama" required 
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">No. Absen</label>
                    <input type="number" id="no_absen" name="no_absen" value="{{ old('no_absen', $siswa->no_absen) }}" placeholder="No. Absen" min="1" required 
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan', $siswa->jurusan) }}" placeholder="Jurusan" required
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Kelas</label>
                    <input type="text" id="kelas" name="kelas" value="{{ old('kelas', $siswa->kelas) }}" placeholder="Kelas" required
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-7">
                    <label class="block text-gray-700 font-semibold mb-2">Alamat</label>
                    <textarea id="alamat" name="alamat" placeholder="Alamat" rows="3" required
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('alamat', $siswa->alamat) }}</textarea>
                </div>

                <div class="flex gap-3">
                    <a href="/siswa" class="w-1/2 text-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 rounded-lg">Batal</a>
                    <button type="submit" class="w-1/2 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>