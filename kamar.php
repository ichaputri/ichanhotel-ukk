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
    <title>IchanHotel | Rooms</title>

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

        <!-- Content Wrapper. Contains page content -->
        <div class="content">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="font-family:'Old Standard TT', serif;"> IchanHotel</h1><br />
                        </div>
                    </div>
                </div>

                <!-- Card Kamar -->
                <div class="container">
                    <div class="col-md-12">
                        <div class="card" style="background-color:#DEDEDA;">
                            <div class="card-body">
                                <div class="row">
                                    <?php
                                    $query = "SELECT * FROM kamar ORDER BY id_kamar ASC";
                                    $result = mysqli_query($koneksi, $query);
                                    if (!$result) {
                                        die("Query Error: ".mysqli_error($koneksi). "-".mysqli_error($koneksi));
                                    }
                                    $no=1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>

                                    <div class="col-sm-6 mb-6">
                                        <div class="card" style="background-color:#dedbd3; color: #46433b;">
                                            <div class="card-body">
                                                <img class="d-block w-100"
                                                    src="admin/gambar/<?php echo $row['foto']; ?>" height="300"><br />
                                                <h4 class="m-0" style="font-family:'Old Standard TT', serif;">
                                                    <?php echo $row['tipe_kamar']; ?> Room - Rp.

                                                    <?php echo $row['harga']; ?>
                                                </h4><br />
                                                <h5>Sisa Jumlah Kamar : <?php echo $row['stock']; ?></h5>
                                                <h5>Fasilitas Kamar :</h5><br />

                                                <p> <i class="fas fa-tv"></i> TV LED </p>
                                                <p> <i class="fas fa-laptop"></i> Meja Kerja</p>
                                                <p> <i class="fa fa-coffee"></i> Meja Makan</p>
                                                <p> <i class="fas fa-air-conditioner"></i> Full AC</p>
                                                <p> <i class="fas fa-wifi"></i> Free Wifi</p>
                                                <p> <i class="fas fa-bath"></i> Kamar Mandi dalam kamar</p>

                                                <a href="detail_kamar.php?id_kamar=<?php echo $row['id_kamar']; ?>"
                                                    class="btn btn-sm"
                                                    style="background-color:#bfa145; color:white; float:right;">
                                                    <i class="fa fa-sticky-note"></i>
                                                    &nbsp Check Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $no++; } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Card Kamar -->

            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php include('footer.php') ?>
        <!--/Main Footer -->

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