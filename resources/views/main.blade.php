<!DOCTYPE html>
<html>
<head>
    <title>Main Menu</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #86c4f0, #f8fbff);
            margin: 0;
            text-align: center;
        }

        h1 {
            margin-top: 60px;
            color: #0d47a1;
            font-size: 32px;
        }

        .container {
            margin: 40px auto;
            max-width: 1200px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            width: 220px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .card h3 {
            margin-bottom: 15px;
            color: #1565c0;
        }

        a {
            text-decoration: none;
            color: white;
            background: linear-gradient(135deg, #2196f3, #0d47a1);
            padding: 10px 18px;
            border-radius: 8px;
            display: inline-block;
            font-size: 14px;
            transition: 0.3s;
        }

        a:hover {
            background: linear-gradient(135deg, #1976d2, #0b3c91);
        }

        /* biar lebih rapih di mobile */
        @media (max-width: 600px) {
            .card {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<h1>📚 Menu Tugas</h1>

<div class="container">

    <div class="card">
        <h3>Pertemuan 1</h3>
        <a href="/intro">Lihat</a>
    </div>

    <div class="card">
        <h3>Pertemuan 2</h3>
        <a href="/news">Lihat</a>
    </div>

    <div class="card">
        <h3>Pertemuan 3 (Contoh)</h3>
        <a href="/contoh">Lihat</a>
    </div>

    <div class="card">
        <h3>Pertemuan 3 (Template)</h3>
        <a href="/template">Lihat</a>
    </div>

    <div class="card">
        <h3>Pertemuan 4</h3>
        <a href="/5026241157">Lihat</a>
    </div>

    <div class="card">
        <h3>Pertemuan 5</h3>
        <a href="/pertemuan5">Lihat</a>
    </div>

</div>

</body>
</html>