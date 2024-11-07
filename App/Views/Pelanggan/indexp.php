<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Pelanggan</title>
    <style>
        /* General Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4e7da; /* Light beige background */
            color: #4e342e; /* Dark brown for text */
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .content-wrapper {
            width: 100%;
            max-width: 800px;
        }

        h1 {
            font-size: 28px;
            color: #6d4c41; /* Dark brown */
            margin-bottom: 20px;
            text-align: center;
        }

        /* Navigation Styling */
        nav {
            background-color: #8d6e63; /* Soft brown */
            width: 100%;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 10px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #6d4c41; /* Darker brown for links */
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #5d4037; /* Dark brown on hover */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        }

        /* Button Styling */
        a[href*="create"] {
            display: inline-block;
            margin: 10px 0;
            padding: 8px 12px;
            background-color: #8d6e63; /* Soft brown */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        a[href*="create"]:hover {
            background-color: #795548; /* Slightly darker brown */
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            color: #4e342e;
        }

        th {
            background-color: #6d4c41; /* Dark brown for headers */
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Action Links Styling */
        td a {
            margin-right: 10px;
            padding: 6px 12px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        /* Edit and Delete Links Styling */
        td a[href*="edit"] {
            background-color: #ffa726; /* Amber for Edit */
        }

        td a[href*="edit"]:hover {
            background-color: #fb8c00;
        }

        td a[href*="delete"] {
            background-color: #e57373; /* Light red for Delete */
        }

        td a[href*="delete"]:hover {
            background-color: #ef5350;
        }
    </style>
</head>

<body>
    <div class="content-wrapper">
        <nav>
            <ul>
                <li><a href="index.php?controller=home&action=index">Home</a></li>
                <li><a href="index.php?controller=barang&action=index">Barang</a></li>
                <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
                <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
            </ul>
        </nav>

        <h1>Daftar Pelanggan</h1>

        <a href="index.php?controller=pelanggan&action=create">Tambah Data</a>

        <table>
            <tr>
                <th>No</th>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($data as $key => $pelanggan): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $pelanggan['id_pelanggan'] ?></td>
                    <td><?= $pelanggan['nama_pelanggan'] ?></td>
                    <td><?= $pelanggan['alamat'] ?></td>
                    <td>
                        <a href="index.php?controller=pelanggan&action=edit&id=<?= $pelanggan['id_pelanggan'] ?>">Edit</a>
                        <a href="index.php?controller=pelanggan&action=delete&id=<?= $pelanggan['id_pelanggan'] ?>" onclick="return confirm('Kamu yakin akan menghapus data ini ?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>
