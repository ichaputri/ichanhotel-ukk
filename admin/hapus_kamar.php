<?php
include '../koneksi.php';
$id_kamar = ($_GET['id_kamar']);
$query = "DELETE FROM kamar WHERE id_kamar='$id_kamar'";
$hasil_query = mysqli_query($koneksi, $query);

if (!$hasil_query) {
    die ("Gagal menghapus data: ".mysqli_error($koneksi)."-".mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil dihapus.');window.location='kamar.php';</script>";
} 
?>