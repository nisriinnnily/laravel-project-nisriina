<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="max-w-2xl mx-auto px-6 py-10">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Edit Data Pegawai</h1>
            <p class="text-gray-500 mb-8">Ubah data pegawai sesuai kebutuhan</p>
            <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Departemen</label>
                    <select name="departemen_id" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @foreach ($departemens as $k)
                            <option value="{{ $k->id }}" {{ $pegawai->departemen_id == $k->id ? 'selected' : '' }}>{{ $k->nama }}</option>
                        @endforeach
                    </select>
                    @error('departemen_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Nama</label>
                    <input type="text" name="nama" value="{{ old('nama', $pegawai->nama) }}" placeholder="Masukkan nama pegawai" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('nama')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-7">
                    <label class="block text-gray-700 font-semibold mb-2">Jabatan</label>
                    <input type="text" name="jabatan" value="{{ old('jabatan', $pegawai->jabatan) }}" placeholder="Masukkan jabatan" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('jabatan')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex gap-3">
                    <a href="{{ route('pegawai.index') }}" class="w-1/2 text-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 rounded-lg">Batal</a>
                    <button type="submit" class="w-1/2 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>