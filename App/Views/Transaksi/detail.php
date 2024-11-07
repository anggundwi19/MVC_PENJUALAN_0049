<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Transaksi</title>
    <style>
        /* Styling umum untuk seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4e7da;
            color: #4e342e;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Styling untuk link navigasi */
        nav {
            position: relative;
            width: 100%;
            text-align: center;
            padding: 20px 0;
            background-color: #f4e7da;
        }

        nav a {
            text-decoration: none;
            color: #8d6e63;
            font-weight: bold;
        }

        nav a:hover {
            color: #6d4c41;
        }

        /* Card styling */
        .card {
            background-color: #fff;
            border: 1px solid #d7ccc8;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin-top: 40px;
        }

        .card h2 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #6d4c41;
        }

        .card p {
            margin: 10px 0;
            font-size: 1.1em;
            color: #5d4037;
        }

        .card p strong {
            color: #4e342e;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Detail Transaksi </h2>
        <p><strong>Id:</strong> <?= htmlspecialchars($transaksiDetail['id_transaksi']) ?></p>
        <p><strong>Nama Barang:</strong> <?= htmlspecialchars($transaksiDetail['nama_barang']) ?></p>
        <p><strong>Nama Pelanggan:</strong> <?= htmlspecialchars($transaksiDetail['nama_pelanggan']) ?></p>
        <p><strong>Jumlah:</strong> <?= htmlspecialchars($transaksiDetail['jumlah']) ?></p>
        <p><strong>Total Harga:</strong> <?= htmlspecialchars($transaksiDetail['total_harga']) ?></p>
        <p><strong>Tanggal :</strong> <?= htmlspecialchars($transaksiDetail['tanggal']) ?></p>
    </div>
    <nav>
        <a href="index.php?controller=transaksi&action=index">Kembali ke Daftar Transaksi</a>
    </nav>
</body>

</html>
