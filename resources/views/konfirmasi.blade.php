<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Laporan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eaf4f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2e7d32;
            text-align: center;
        }

        .data {
            background: #f5f5f5;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .data p {
            margin: 10px 0;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: #1565c0;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>✓ Laporan Berhasil</h1>

    <p>Terima kasih, laporan banjir Anda telah diterima.</p>

    <div class="data">
        <p><strong>Nama Pelapor:</strong> {{ $nama }}</p>
        <p><strong>Lokasi:</strong> {{ $lokasi }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $tinggi }} cm</p>
    </div>

    <a href="{{ route('laporan.form') }}">Kembali ke Form</a>

</div>

</body>
</html>