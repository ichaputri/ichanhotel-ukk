<?php
include '../koneksi.php';

$id_kamar = $_POST['id_kamar'];
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
        $query = "INSERT INTO fasilitas_kamar (id_kamar,nama_fasilitas,foto) VALUES ('$id_kamar','$nama_fasilitas','$nama_gambar_baru')";
        $result = mysqli_query($koneksi,$query);

        if (!$result) {
            die("Query Gagal dijalankan : ".mysqli_error($koneksi)."-".mysqli_error($koneksi));
        } else {
           echo "<script>alert('Data berhasil ditambah.');window.location='fasilitas.php';</script>";
        }
        
    } else {
        echo "<script>alert('Extensi gambar harus png atau jpg.');window.location='fasilitas.php';</script>";
    }
    
} else {
    $query = "INSERT INTO fasilitas_kamar (id_kamar,nama_fasilitas,foto) VALUES ('$id_kamar','$nama_fasilitas',null)";
    $result = mysqli_query($koneksi,$query);

    if (!$result) {
        die("Query Gagal dijalankan : ".mysqli_error($koneksi)."-".mysqli_error($koneksi));
    } else {
       echo "<script>alert('Data berhasil ditambah.');window.location='fasilitas.php';</script>";
    }
}

?>