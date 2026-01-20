<?php
include 'db.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM antrian WHERE id=$id");
header("Location: list.php");
?>
