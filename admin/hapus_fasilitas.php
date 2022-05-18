<?php
include '../koneksi.php';
$id_fasilitas = ($_GET['id_fasilitas']);
$query = "DELETE FROM fasilitas_kamar WHERE id_fasilitas='$id_fasilitas'";
$hasil_query = mysqli_query($koneksi, $query);

if (!$hasil_query) {
    die ("Gagal menghapus data: ".mysqli_error($koneksi)."-".mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil dihapus.');window.location='fasilitas.php';</script>";
} 
?>