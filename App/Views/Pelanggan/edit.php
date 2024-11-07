<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Pelanggan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4e7da; /* Warna latar belakang coklat muda */
            color: #4e342e; /* Warna teks coklat tua */
            margin: 20px;
        }

        h1 {
            text-align: center; /* Memusatkan teks judul */
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

        input[type="text"] {
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
            transition: background-color 0.3s; /* Transisi halus */
        }

        button:hover {
            background-color: #6d4c41; /* Warna tombol saat hover */
        }
    </style>
</head>

<body>
    <h1 style="text align - center;">Edit Pelanggan</h1>
    <form action="index.php?controller=pelanggan&action=update" method="POST">
        <label for="id_pelanggan">ID Pelanggan:</label>
        <input type="text" name="id_pelanggan" value="<?= htmlspecialchars($pelanggan['id_pelanggan']) ?>" required>

        <label for="nama_pelanggan">Nama Pelanggan:</label>
        <input type="text" name="nama_pelanggan" value="<?= htmlspecialchars($pelanggan['nama_pelanggan']) ?>" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?= htmlspecialchars($pelanggan['alamat']) ?>" required>

        <button type="submit">Update</button>
    </form>
</body>

</html>
