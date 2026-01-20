<?php include 'sidebar.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>BRIAN Barbershop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    .beranda-video {
        position: fixed;
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(25%);
        z-index: -1;
    }

    .beranda-content {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        height: 100vh;
        padding-left: 320px;
    }

    .beranda-text {
        color: white;
        max-width: 800px;
    }

    .beranda-text h1 {
        color: #00bfff;
        font-size: 80px; /* ✅ Lebih besar */
        font-weight: bold;
        margin-bottom: 40px;
    }

    .beranda-text p {
        font-size: 28px;  /* ✅ Diperbesar lagi */
        line-height: 1.6;
        margin-bottom: 20px;
    }
</style>

</head>
<body>
    <video class="beranda-video" autoplay muted loop>
        <source src="video/Iklan Pangkas Rambut Cinematic Video  PAPA MUDA Barbershop - KVP (720p, h264).mp4" type="video/mp4">
    </video>
    <div class="beranda-content">
        <div class="beranda-text">
            <h1>BRIAN Barbershop</h1>
            <p>📍 Lokasi: Jl. Abdul fatah</p>
            <p>📞 Kontak: 0822-7989-4408</p>
            <p>✂️ Tukang Cukur: Brian Faruq Androvo</p>
        </div>
    </div>

    <a href="index.php" class="active"><i class="fas fa-home"></i> <span>Beranda</span></a>
    <a href="tambah.php"><i class="fas fa-plus"></i> <span>Tambah</span></a>
    <a href="list.php"><i class="fas fa-list"></i> <span>List</span></a>
    <a href="selesai.php"><i class="fas fa-check"></i> <span>Selesai</span></a>

</body>
</html>
``
