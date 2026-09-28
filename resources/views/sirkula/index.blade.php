<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirkula</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f2;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            text-align: center;
        }

        h1 {
            color: #2e7d32;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background: #2e7d32;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Sirkula</h1>

    <p>
        Aplikasi warga untuk mengelola kegiatan lingkungan dalam satu RT.
    </p>

    <div class="menu">

        <div class="card">
            <h2>Bank Sampah</h2>
            <p>Kelola kegiatan bank sampah warga.</p>
            <a href="{{ route('sirkula.bank-sampah') }}">
                Buka
            </a>
        </div>

        <div class="card">
            <h2>Iuran</h2>
            <p>Informasi dan pengelolaan iuran warga.</p>
            <a href="{{ route('sirkula.iuran') }}">
                Buka
            </a>
        </div>

        <div class="card">
            <h2>Kebun Komunitas</h2>
            <p>Informasi kegiatan kebun komunitas.</p>
            <a href="{{ route('sirkula.kebun') }}">
                Buka
            </a>
        </div>

        <div class="card">
            <h2>Laporan Fasilitas</h2>
            <p>Laporkan kerusakan fasilitas lingkungan.</p>
            <a href="{{ route('sirkula.laporan-fasilitas') }}">
                Buka
            </a>
        </div>

    </div>

</div>

</body>
</html>