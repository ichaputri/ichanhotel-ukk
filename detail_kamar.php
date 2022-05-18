<?php
include 'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="icon" href="assets/images/favicon.ico" />
    <title>IchanHotel | Check Details</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

    <style>
    .content {
        background-image: url("assets/images/bg.jpg");
        background-size: cover;
        background-position: center;
        height: 100%;
    }
    </style>
</head>

<body class="hold-transition sidebar-collapse layout-top-nav layout-navbar-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include('navbar.php') ?>
        <!-- /.navbar -->

        <br /><br />
        <br /><br />

        <!-- Main content -->
        <div class="content">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="font-family:'Old Standard TT', serif;"> Detail Kamar </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <div class="card" style="background-color:#dedbd3; color: #46433b;">
                            <?php
                                $id_kamar = ($_GET['id_kamar']);
                                $query = "SELECT * FROM kamar WHERE id_kamar='$id_kamar'";
                                $result = mysqli_query($koneksi, $query);
                                if (!$result) {
                                    die("Query Error: ".mysqli_error($koneksi). "-".mysqli_error($koneksi));
                                }
                                
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?> 

                            <div class="card-body">
                                <img class="d-block" src="admin/gambar/<?php echo $row['foto']; ?>" width="100%"><br />
                                <h3 style="font-family:'Old Standard TT', serif;"><?php echo $row['tipe_kamar']; ?> Room
                                    - Rp. <?php echo $row['harga']; ?></h3>
                                <br />

                                <h4 style="font-family:'Old Standard TT', serif;">Fasilitas : </h4><br>
                                <div class="row">
                                <?php 
                              $fasilitas_kamar = mysqli_query($koneksi, "SELECT * FROM fasilitas_kamar");
                              $no=1;
                              while ($a = mysqli_fetch_array($fasilitas_kamar)) {
                                if ($a['id_kamar'] == $row['id_kamar']) { ?>

                                <div class="col-sm-4 mb-4">
                                    <div class="card" style="background-color:#dedbd3; color: #46433b;">
                                        <div class="card-body">
                                            <img class="d-block" src="admin/gambar/<?php echo $a['foto']; ?>"
                                                width="300" height="200"><br />
                                            <h6 style="font-family:'system-ui;', serif;">
                                                <?php echo $a['nama_fasilitas']; ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <?php $no++; }} ?>
                                </div>
                                <?php } ?>
                           
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php include('footer.php') ?>
        <!-- /Main Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>