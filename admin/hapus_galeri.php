<?php
include '../koneksi.php';
$id_galeri = ($_GET['id_galeri']);
$query = "DELETE FROM galeri WHERE id_galeri='$id_galeri'";
$hasil_query = mysqli_query($koneksi, $query);

if (!$hasil_query) {
    die ("Gagal menghapus data: ".mysqli_error($koneksi)."-".mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil dihapus.');window.location='galeri.php';</script>";
} 
?>