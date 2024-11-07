<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
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

        h2 {
            color: #6d4c41; /* Dark brown title */
            margin-bottom: 20px;
        }

        /* Form Container Styling */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            color: #5d4037; /* Medium brown text */
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f3ef; /* Light brownish input background */
            font-size: 16px;
            margin-bottom: 15px;
        }

        /* Displaying Total Harga */
        p {
            font-weight: bold;
            font-size: 16px;
            color: #6d4c41; /* Soft brown for text */
            margin-top: 10px;
        }

        /* Button Styling */
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #8d6e63; /* Soft brown button */
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #795548; /* Darker brown */
        }
    </style>
</head>

<body>
    <h2>Tambah Transaksi</h2>
    <form action="index.php?controller=transaksi&action=store" method="POST">
        <label for="id_transaksi">ID Transaksi:</label>
        <input type="number" name="id_transaksi" required>

        <label for="kode_barang">Kode Barang:</label>
        <input type="text" name="kode_barang" required>

        <label for="id_pelanggan">ID Pelanggan:</label>
        <input type="text" name="id_pelanggan" required>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required>

        <label for="harga_barang">Harga Barang:</label>
        <input type="number" name="harga_barang" required>

        <label for="tanggal">Tanggal Transaksi:</label>
        <input type="datetime-local" name="tanggal" required>

        <p>Total Harga: <span id="total_harga">0</span></p>

        <button type="submit">Simpan</button>
    </form>

    <!-- Script JavaScript untuk menghitung total harga secara otomatis -->
    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>
</body>

</html>
