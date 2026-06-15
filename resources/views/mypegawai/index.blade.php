<!DOCTYPE html>
<html>
<head>
    <title>Kode Soal mypegawai</title>
</head>
<body>

<h2>Kode Soal mypegawai</h2>

<a href="/eas/tambah">Tambah Data</a>

<br><br>

<table border="1" cellpadding="10">

    <tr>
        <th>Kode Pegawai</th>
        <th>Nama Lengkap</th>
        <th>Divisi</th>
        <th>Departemen</th>
        <th>Aksi</th>
    </tr>

    @foreach($pegawai as $p)

    <tr>
        <td>{{ $p->kodepegawai }}</td>
        <td>{{ $p->namalengkap }}</td>
        <td>{{ $p->divisi }}</td>
        <td>{{ $p->departemen }}</td>

        <td>
            <a href="/eas/view/{{ $p->kodepegawai }}">
                View
            </a>
        </td>
    </tr>

    @endforeach

</table>

</body>
</html>
