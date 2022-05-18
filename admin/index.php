<?php 
session_start();

  // cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
  header("location:../index.php?pesan=gagal");
  //jika bukan admin yang login
}elseif ($_SESSION['level']=="2") {
    header("location:../index.php?pesan=gagal");
}elseif ($_SESSION['level']=="3"){
    header("location:../index.php?pesan=gagal");
}

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
    <link rel="shortcut icon" type="icon" href="../assets/images/favicon.ico" />
    <title>IchanHotel | Dashboard Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-collapse layout-top-nav layout-navbar-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include('navbar.php') ?>
        <!-- /.navbar -->

        <br /><br />
        
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="font-family:'Old Standard TT', serif;"> Dashboard</h1><br />
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                    <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "select * from kamar");
                                        $jumlah_kamar = mysqli_num_rows($data);
                                        ?>
                                        <!-- small card -->
                                        <div class="small-box " style="background-color:#bfa145; color:black;">
                                            <div class="inner">
                                                <h3>
                                                <?php echo $jumlah_kamar; ?>
                                                </h3>

                                                <p>Data Kamar</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-home"></i>
                                            </div>
                                            <a href="kamar.php" class="small-box-footer" style="color:black;">
                                                More info <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                    <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "select * from fasilitas_kamar");
                                        $jumlah_fasilitas = mysqli_num_rows($data);
                                        ?>
                                        <!-- small card -->
                                        <div class="small-box" style="background-color:#bfa145; color:black;">
                                            <div class="inner">
                                                <h3>
                                                <?php echo $jumlah_fasilitas; ?>
                                                </h3>

                                                <p>Fasilitas Kamar</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-list-alt"></i>
                                            </div>
                                            <a href="fasilitas.php" class="small-box-footer" style="color:black;">
                                                More info <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                    <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "select * from galeri");
                                        $jumlah_galeri = mysqli_num_rows($data);
                                        ?>
                                        <!-- small card -->
                                        <div class="small-box" style="background-color:#bfa145; color:black;">
                                            <div class="inner">
                                                <h3>
                                                <?php echo $jumlah_galeri; ?>
                                                </h3>

                                                <p>Galeri</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-image"></i>
                                            </div>
                                            <a href="galeri.php" class="small-box-footer" style="color:black;">
                                                More info <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                    <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "select * from users");
                                        $jumlah_users = mysqli_num_rows($data);
                                        ?>
                                        <!-- small card -->
                                        <div class="small-box" style="background-color:#bfa145; color:black;">
                                            <div class="inner">
                                                <h3>
                                                <?php echo $jumlah_users; ?>
                                                </h3>

                                                <p>Users</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <a href="users.php" class="small-box-footer" style="color:black;">
                                                More info <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Tugas Ujikom icha dewi
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022 <a>IchanHotel</a>.</strong> All rights reserved.
        </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="../assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../assets/dist/js/adminlte.min.js"></script>
</body>

</html>