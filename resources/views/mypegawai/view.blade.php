<!DOCTYPE html>
<html>
<head>
    <title>Kode Soal mypegawai</title>
</head>
<body>

<h2>Kode Soal mypegawai</h2>

<a href="/eas">Kembali</a>

<br><br>

<p>
    Kode Pegawai :
    <input type="text"
           value="{{ $pegawai->kodepegawai }}"
           readonly>
</p>

<p>
    Nama Lengkap :
    <input type="text"
           value="{{ $pegawai->namalengkap }}"
           readonly>
</p>

<p>
    Divisi :
    <input type="text"
           value="{{ $pegawai->divisi }}"
           readonly>
</p>

<p>
    Departemen :
    <input type="text"
           value="{{ $pegawai->departemen }}"
           readonly>
</p>

</body>
</html>
