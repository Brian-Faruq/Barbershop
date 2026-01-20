<?php
include 'db.php';

$nama = $_POST['nama'];
$model = $_POST['model_rambut'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
move_uploaded_file($tmp, "uploads/".$gambar);

// Ambil tanggal hari ini
$tanggal_hari_ini = date('Y-m-d');

// Cek jumlah antrian hari ini
$cek = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM antrian WHERE tanggal = '$tanggal_hari_ini'");
$data = mysqli_fetch_assoc($cek);
$jumlah_antrian = $data['jumlah'];

// Nomor antrian hari ini
$nomor = $jumlah_antrian + 1;

// Simpan ke database
mysqli_query($koneksi, "INSERT INTO antrian (nama, nomor_antrian, model_rambut, gambar, tanggal) 
VALUES ('$nama', '$nomor', '$model', '$gambar', CURDATE())");

header("Location: list.php");
?>
