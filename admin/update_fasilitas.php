<?php
include '../koneksi.php';
$id_kamar = $_POST['id_kamar'];
$id_fasilitas = $_POST['id_fasilitas'];
$tipe_kamar = $_POST['tipe_kamar'];
$nama_fasilitas = $_POST['nama_fasilitas'];
$foto = $_FILES['foto']['name'];
 
if ($foto !="") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x = explode('.',$foto);
    $extensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$foto;
    if (in_array($extensi,$ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
        $query = "UPDATE fasilitas_kamar SET id_kamar = '$id_kamar', id_fasilitas = '$id_fasilitas', foto = '$nama_gambar_baru', nama_fasilitas= '$nama_fasilitas'";
        $query .= "WHERE id_fasilitas = '$id_fasilitas'";
        $result = mysqli_query($koneksi,$query);

        if (!$result) {
            die("Query Gagal dijalankan : ".mysqli_error($koneksi)."-".mysqli_error($koneksi));
        } else {
           echo "<script>alert('Data berhasil diubah.');window.location='fasilitas.php';</script>";
        }
        
    } else {
        echo "<script>alert('Extensi gambar harus png atau jpg.');window.location='fasilitas.php';</script>";
    }
    
} else {
    $query = "UPDATE fasilitas_kamar SET id_kamar = '$id_kamar', id_fasilitas = '$id_fasilitas', nama_fasilitas= '$nama_fasilitas'";
        $query .= "WHERE id_fasilitas = '$id_fasilitas'";
        $result = mysqli_query($koneksi,$query);

    if (!$result) {
        die("Query Gagal dijalankan : ".mysqli_error($koneksi)."-".mysqli_error($koneksi));
    } else {
       echo "<script>alert('Data berhasil diubah.');window.location='fasilitas.php';</script>";
    }
}

?>