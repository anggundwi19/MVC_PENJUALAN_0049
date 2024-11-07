<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4e7da; /* Warna latar belakang coklat muda */
            color: #4e342e; /* Warna teks coklat tua */
            margin: 20px;
            
        }

        h1 {
            color: #6d4c41; /* Warna judul coklat gelap */
            margin-bottom: 20px;
        }

        form {
            background-color: #fff; /* Warna latar belakang form */
            border: 1px solid #d7ccc8; /* Border coklat muda */
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Bayangan halus */
            max-width: 400px; /* Lebar maksimum form */
            margin: auto; /* Pusatkan form */
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #d7ccc8; /* Border coklat muda */
            border-radius: 4px; /* Sudut membulat */
        }

        button {
            padding: 10px 15px;
            background-color: #8d6e63; /* Warna tombol coklat */
            color: white;
            border: none;
            border-radius: 4px; /* Sudut membulat tombol */
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #6d4c41; /* Warna tombol saat hover */
        }

        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #4e342e; /* Warna link coklat tua */
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Edit Barang</h1>
    <form action="index.php?controller=barang&action=update" method="POST">
        <input type="hidden" name="kode_barang" value="<?= htmlspecialchars($barang['kode_barang']) ?>">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" value="<?= htmlspecialchars($barang['nama_barang']) ?>" required><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" value="<?= htmlspecialchars($barang['harga']) ?>" required><br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" value="<?= htmlspecialchars($barang['stok']) ?>" required><br>

        <button type="submit">Update</button>
        <a href="index.php?controller=barang&action=index">Batal</a>
    </form>
</body>

</html>
