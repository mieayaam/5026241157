<!DOCTYPE html>
<html>
<head>
    <title>Kode Soal mypegawai</title>

    <script>

    function validasi()
    {
        var kodepegawai =
        document.getElementById("kodepegawai").value;

        var namalengkap =
        document.getElementById("namalengkap").value;

        if(kodepegawai == "")
        {
            alert("Kode Pegawai harus diisi");
            return false;
        }

        if(!/^[a-zA-Z0-9]+$/.test(kodepegawai))
        {
            alert("Kode Pegawai hanya boleh huruf dan angka");
            return false;
        }

        if(namalengkap == "")
        {
            alert("Nama Lengkap harus diisi");
            return false;
        }

        if(!/^[a-zA-Z\s]+$/.test(namalengkap))
        {
            alert("Nama Lengkap hanya boleh huruf");
            return false;
        }

        return true;
    }

    </script>

</head>
<body>

<h2>Kode Soal mypegawai</h2>

<a href="/eas">Kembali</a>

<br><br>

<form action="/eas/store"
      method="POST"
      onsubmit="return validasi()">

    @csrf

    <p>
        Kode Pegawai :
        <input type="text"
               id="kodepegawai"
               name="kodepegawai">
    </p>

    <p>
        Nama Lengkap :
        <input type="text"
               id="namalengkap"
               name="namalengkap">
    </p>

    <p>
        Divisi :
        <input type="text"
               name="divisi">
    </p>

    <p>
        Departemen :
        <input type="text"
               name="departemen">
    </p>

    <button type="submit">
        Simpan
    </button>

</form>

</body>
</html>
