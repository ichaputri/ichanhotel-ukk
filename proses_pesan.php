<?php

include 'koneksi.php';

if(isset($_POST['kamardipesan'])){
    $id_pesanan = $_POST['id_pesanan'];
    $cek_in = $_POST['cek_in'];
    $cek_out = $_POST['cek_out'];
    $jml_kamar = $_POST['jml_kamar'];
    $nama_pemesan = $_POST['nama_pemesan'];
    $email_pemesan = $_POST['email_pemesan'];
    $hp_pemesan = $_POST['hp_pemesan'];
    $nama_tamu = $_POST['nama_tamu'];
    $id_kamar = $_POST['id_kamar'];
    $koderes = date('mdy').$_POST['nama_pemesan'].$_POST['id_kamar'];

    $cekstocksekarang=mysqli_query($koneksi,"SELECT * FROM kamar WHERE id_kamar='$id_kamar'");
    $ambildata = mysqli_fetch_array($cekstocksekarang);

    $stocksekarang = $ambildata['stock'];

    if ($stocksekarang >= $jml_kamar)    {
        $tambahkanstocksekarangdenganquantity = $stocksekarang-$jml_kamar;

        $addtotambahkamar = mysqli_query($koneksi,"INSERT into pesanan values('','$cek_in','$cek_out','$jml_kamar','','$nama_pemesan','$email_pemesan','$hp_pemesan','$nama_tamu','$id_kamar','1','$koderes')");
        $updatestockkamar = mysqli_query($koneksi,"UPDATE kamar set stock = '$tambahkanstocksekarangdenganquantity' where id_kamar='$id_kamar'");

        if ($addtotambahkamar&&$updatestockkamar) {
                echo "<script>window.location='book.php?nama_pemesan=$nama_pemesan'</script>";

        } else {
            header(location:'index.php'); 
        }   
    }else{
        echo "<script>alert('Kamar Sudah Full !!'); window.location='index.php';</script>";
    }
    
        $ambildata = mysqli_fetch_array($cekstocksekarang);

    
}