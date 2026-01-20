<?php
include 'db.php';
include 'sidebar.php';

// Ambil keyword pencarian jika ada
$cari = isset($_GET['cari']) ? $_GET['cari'] : '';

// Query data dari tabel selesai dengan filter pencarian
$data = mysqli_query($koneksi, "SELECT * FROM selesai WHERE nama LIKE '%$cari%' ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>BRIAN Barbershop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #111;
            color: white;
            margin-left: 100px;
            padding: 60px 40px;
            font-family: Arial, sans-serif;
        }

        h2 {
            font-size: 48px;
            color: #00bfff;
            margin-bottom: 30px;
        }

        .search-form {
            margin-bottom: 30px;
        }

        .search-form input[type="text"] {
            padding: 10px 15px;
            border-radius: 6px;
            border: none;
            width: 300px;
            font-size: 16px;
        }

        .search-form button {
            padding: 10px 15px;
            background-color: #00bfff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
        }

        .search-form button:hover {
            background-color: #0099cc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #1e1e1e;
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 16px 20px;
            text-align: left;
            font-size: 18px;
            border-bottom: 1px solid #333;
        }

        th {
            background-color: #222;
            color: #00bfff;
        }

        tr:hover {
            background-color: #2a2a2a;
        }

        .kembali-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #00bfff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
        }

        .kembali-btn:hover {
            background-color: #0099cc;
        }
    </style>
</head>
<body>
    <h2>List Selesai Cukur</h2>

    <!-- Form pencarian -->
    <form class="search-form" method="GET" action="">
        <input type="text" name="cari" placeholder="Cari nama..." value="<?= htmlspecialchars($cari) ?>">
        <button type="submit"><i class="fas fa-search"></i> Cari</button>
    </form>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Antrian</th>
            <th>Tanggal Cukur</th>
        </tr>
        <?php $no = 1; while($d = mysqli_fetch_array($data)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $d['nama'] ?></td>
            <td><?= $d['nomor_antrian'] ?></td>
            <td><?= $d['tanggal'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <?php if (!empty($cari)) { ?>
    <div>
        <a href="selesai.php" class="kembali-btn">Kembali</a>
    </div>
    <?php } ?>
</body>
</html>
