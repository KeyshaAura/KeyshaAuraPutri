<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <a href="{{ route('siswa.index') }}">Kembali</a>
    <br><br>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT') <div>
            <label>Nama:</label><br>
            <input type="text" name="nama" value="{{ $siswa->nama }}" required maxlength="50">
        </div><br>

        <div>
            <label>Umur:</label><br>
            <input type="number" name="umur" value="{{ $siswa->umur }}" required>
        </div><br>

        <div>
            <label>Nilai:</label><br>
            <input type="number" step="0.01" name="nilai" value="{{ $siswa->nilai }}" required>
        </div><br>

        <button type="submit">Perbarui Data</button>
    </form>
</body>
</html>