<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <a href="{{ route('siswa.index') }}">Kembali</a>
    <br><br>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama:</label><br>
            <input type="text" name="nama" required maxlength="50">
        </div><br>

        <div>
            <label>Umur:</label><br>
            <input type="number" name="umur" required>
        </div><br>

        <div>
            <label>Nilai:</label><br>
            <input type="number" step="0.01" name="nilai" required>
        </div><br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>