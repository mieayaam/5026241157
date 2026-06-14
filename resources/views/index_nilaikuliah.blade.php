<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Kuliah</title>
</head>
<body>

<h2>Data Nilai Kuliah</h2>

<a href="/nilaikuliah/tambah">
    Tambah Data
</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>

    @foreach($data as $d)

    @php

        if($d->nilaiangka <= 40)
            $huruf = 'D';
        elseif($d->nilaiangka <= 60)
            $huruf = 'C';
        elseif($d->nilaiangka <= 80)
            $huruf = 'B';
        else
            $huruf = 'A';

        $bobot = $d->nilaiangka * $d->sks;

    @endphp

    <tr>
        <td>{{ $d->id }}</td>
        <td>{{ $d->nrp }}</td>
        <td>{{ $d->nilaiangka }}</td>
        <td>{{ $d->sks }}</td>
        <td>{{ $huruf }}</td>
        <td>{{ $bobot }}</td>
    </tr>

    @endforeach

</table>

</body>
</html>
