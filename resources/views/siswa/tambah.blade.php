<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="max-w-2xl mx-auto px-6 py-10">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Tambah Siswa</h1>
            <p class="text-gray-500 mb-8">Masukkan data siswa baru</p>
            <form action="{{ route('siswa.kirim') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan nama" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">No. Absen</label>
                    <input type="number" name="no_absen" placeholder="Masukkan nomor absen" min="1" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Jurusan</label>
                    <input type="text" name="jurusan" placeholder="Contoh: TKJ" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Kelas</label>
                    <input type="text" name="kelas" placeholder="Contoh: XI TKJ 1" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></div>

                <div class="mb-7">
                    <label class="block text-gray-700 font-semibold mb-2">Alamat</label>
                    <textarea name="alamat" placeholder="Masukkan alamat" rows="3" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea></div>

                <div class="flex gap-3">
                    <a href="/siswa" class="w-1/2 text-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 rounded-lg">Kembali</a>
                    <button type="submit" class="w-1/2 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg">Simpan</button></div>
            </form>
        </div>
    </div>
</body>
</html>