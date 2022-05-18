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
    <title>IchanHotel | Fasilitas</title>

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

        <!-- Main content -->
        <div class="content">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="font-family:'Old Standard TT', serif;"> IchanHotel</h1>
                        </div>
                    </div>
                </div>

                <!-- Carousel -->
                <div class="container">
                    <div class="col-md-12">
                        <div class="card" style="background-color:#DEDEDA;">
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="assets/images/hotel1.jpg" alt="First slide"
                                                height="500">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/images/hotel2.jpg" alt="Second slide"
                                                height="500">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/images/hotel3.jpg" alt="Third slide"
                                                height="500">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                            <i class="fas fa-chevron-left"></i>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-custom-icon" aria-hidden="true">
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Carousel -->

                            <!-- Card Fasilitas Hotel -->
                            <divv class="card-body">
                                <h2 class="text-center" style="font-family:'Old Standard TT', serif;">Fasilitas Hotel
                                </h2>
                                <br>
                                <div class="row">
                                    <?php
                                    $query = "SELECT * FROM galeri ORDER BY id_galeri ASC";
                                    $result = mysqli_query($koneksi, $query);
                                    if (!$result) {
                                        die("Query Error: ".mysqli_error($koneksi). "-".mysqli_error($koneksi));
                                    }
                                    $no=1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?> 

                                    <div class="col-sm-4 mb-4">
                                        <div class="card">
                                            <!-- /.card-header -->
                                            <div class="card-body" style="background-color:#dedbd3; color: #46433b;">
                                                <img class="d-block" src="admin/gambar/<?php echo $row['foto']; ?>"
                                                    width="100%"> <br />
                                                <p><?php echo $row['keterangan']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $no++; } ?>
                                </div>
                            </divv>
                            <!-- /Card Fasilitas Hotel -->
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