<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Sampah - Sirkula</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f2;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
        }

        h1 {
            color: #2e7d32;
        }

        a {
            display: inline-block;
            margin-top: 20px;
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

    <h1>Bank Sampah</h1>

    <p>
        Halaman pengelolaan kegiatan Bank Sampah Sirkula.
    </p>

    <p>
        Warga dapat memperoleh informasi mengenai kegiatan
        pengumpulan dan pengelolaan sampah.
    </p>

    <a href="{{ route('sirkula.index') }}">
        Kembali ke Sirkula
    </a>

</div>

</body>
</html>