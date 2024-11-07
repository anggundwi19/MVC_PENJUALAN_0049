<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <style>
        /* Reset Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4e7da; /* Light beige background */
            color: #4e342e; /* Dark brown text */
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            font-size: 26px;
            color: #6d4c41; /* Warm brown color */
            margin-bottom: 15px;
            text-align: center;
        }

        /* Navigation Styling */
        nav {
            background-color: #8d6e63; /* Soft brown */
            width: 100%;
            max-width: 800px;
            border-radius: 8px;
            margin-bottom: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
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
            transition: all 0.3s ease;
            border-radius: 5px;
            background-color: #6d4c41; /* Darker brown for links */
        }
        nav ul li a:hover {
            background-color: #5d4037; /* Darker brown on hover */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        }  
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php?controller=home&action=index">Home</a></li>
            <li><a href="index.php?controller=barang&action=index">Barang</a></li>
            <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
            <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
        </ul>
    </nav>

    <h1>Selamat datang di aplikasi penjualan</h1>

    <div id="content">
        <!-- Konten halaman akan ditampilkan di sini -->
    </div>



</body>

</html>