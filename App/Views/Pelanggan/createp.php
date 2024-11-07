<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggan</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4e7da; /* Light beige background */
            color: #4e342e; /* Dark brown text */
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #6d4c41; /* Dark brown title */
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
            margin: 10px 0 5px;
            color: #5d4037; /* Medium brown */
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f3ef; /* Light brownish input background */
            font-size: 16px;
            margin-bottom: 15px;
        }

        /* Button Styling */
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #8d6e63; /* Soft brown button */
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #795548; /* Darker brown */
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
    <h1>Tambah Pelanggan</h1>
    <form action="index.php?controller=pelanggan&action=store" method="POST">
        <label for="id_pelanggan">ID Pelanggan:</label>
        <input type="text" name="id_pelanggan" required>

        <label for="nama_pelanggan">Nama Pelanggan:</label>
        <input type="text" name="nama_pelanggan" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required>

        <input type="submit" value="Simpan">
    </form>
    <a href="index.php?controller=pelanggan&action=index">Kembali</a>
</body>

</html>
