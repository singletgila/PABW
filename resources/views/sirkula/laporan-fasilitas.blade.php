<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sirkula - Laporan Fasilitas</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f2;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 550px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #2e7d32;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 7px;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            border-radius: 7px;
            background: #2e7d32;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #1b5e20;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Sirkula</h1>

    <p>Laporan Fasilitas Warga</p>

    <form>

        <label>Nama Warga</label>
        <input type="text" name="nama" required>

        <label>Jenis Fasilitas</label>
        <select name="fasilitas" required>
            <option value="">-- Pilih Fasilitas --</option>
            <option value="Lampu Jalan">Lampu Jalan</option>
            <option value="Jalan">Jalan</option>
            <option value="Saluran Air">Saluran Air</option>
            <option value="Taman">Taman</option>
            <option value="Fasilitas Umum">Fasilitas Umum</option>
        </select>

        <label>Lokasi</label>
        <input type="text" name="lokasi" required>

        <label>Keterangan</label>
        <textarea name="keterangan" rows="4" required></textarea>

        <button type="submit">
            Kirim Laporan
        </button>

    </form>

</div>

</body>
</html>