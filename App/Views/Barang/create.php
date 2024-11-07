<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4e7da; /* Light beige background */
            color: #4e342e; /* Dark brown for text */
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-size: 28px;
            color: #6d4c41; /* Dark brown */
            margin-bottom: 20px;
        }

        /* Form Styling */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #5d4037; /* Medium brown */
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f3ef; /* Light brownish background for inputs */
            font-size: 16px;
        }

        /* Button Styling */
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #8d6e63; /* Soft brown */
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #795548; /* Slightly darker brown */
        }

        /* Link Styling */
        a {
            display: inline-block;
            margin-top: 15px;
            color: #6d4c41; /* Dark brown */
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #8d6e63; /* Soft brown on hover */
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Tambah Barang</h1>
    <form action="index.php?controller=barang&action=store" method="POST">
        <label for="kode_barang">Kode Barang:</label>
        <input type="text" id="kode_barang" name="kode_barang" required>

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" required>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required>

        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" required>

        <input type="submit" value="Simpan">
    </form>

    <a href="index.php?controller=barang&action=index">Kembali</a>
</body>

</html>
