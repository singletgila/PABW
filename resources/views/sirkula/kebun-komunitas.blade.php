<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebun Komunitas - Sirkula</title>

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

    <h1>Kebun Komunitas</h1>

    <p>
        Halaman informasi kegiatan Kebun Komunitas Sirkula.
    </p>

    <p>
        Warga dapat melihat dan berpartisipasi dalam kegiatan
        pengelolaan kebun bersama.
    </p>

    <a href="{{ route('sirkula.index') }}">
        Kembali ke Sirkula
    </a>

</div>

</body>
</html>