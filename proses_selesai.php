<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data dari tabel antrian
    $data = mysqli_query($koneksi, "SELECT * FROM antrian WHERE id='$id'");
    $row = mysqli_fetch_assoc($data);

    if ($row) {
        $nama = $row['nama'];
        $id = $row['nomor_antrian'];
        $tanggal = $row['tanggal'];

        // Masukkan hanya nama dan nomor ke tabel selesai
        mysqli_query($koneksi, "INSERT INTO selesai (nama, nomor_antrian, tanggal) VALUES ('$nama', '$id', '$tanggal')");

        // Hapus dari tabel antrian
        mysqli_query($koneksi, "DELETE FROM antrian WHERE nomor_antrian='$id'");
    }
}

header("Location: list.php");
exit;
