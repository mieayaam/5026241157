<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Nilai Kuliah</title>
</head>
<body>

<h2>Tambah Data Nilai Kuliah</h2>

<form action="/nilaikuliah/simpan" method="POST">
    @csrf

    <p>
        NRP :
        <input type="text" name="nrp">
    </p>

    <p>
        Nilai Angka :
        <input type="text" name="nilaiangka">
    </p>

    <p>
        SKS :
        <input type="text" name="sks">
    </p>

    <button type="submit">Simpan</button>

</form>

</body>
</html>
