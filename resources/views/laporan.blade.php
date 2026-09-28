<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - Padang</title>

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
            text-align: center;
            color: #1565c0;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background: #1565c0;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0d47a1;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>LaporBanjir</h1>

    <p>Form Pelaporan Banjir Padang</p>

    <form action="{{ route('laporan.proses') }}" method="POST">
        @csrf

        <label for="nama">Nama Pelapor</label>
        <input type="text" id="nama" name="nama" required>

        <label for="lokasi">Lokasi Kejadian</label>
        <input type="text" id="lokasi" name="lokasi"
               placeholder="Contoh: Kecamatan Bojongsoang, Desa Buahbatu"
               required>

        <label for="tinggi">Tinggi Genangan Air (cm)</label>
        <input type="number" id="tinggi" name="tinggi"
               min="1" required>

        <button type="submit">Kirim Laporan</button>
    </form>
</div>

</body>
</html>