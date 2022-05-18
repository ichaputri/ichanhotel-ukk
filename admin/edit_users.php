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
    <title>IchanHotel</title>

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
        <nav class="main-header navbar navbar-expand-md navbar-dark" style="background-color:#1E1E23;">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="../assets/images/logo.png" alt="AdminLTE Logo" style="opacity: .8">
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="kamar.php" class="nav-link">Kamar</a>
                        </li>
                        <li class="nav-item">
                            <a href="fasilitas.php" class="nav-link">Fasilitas Kamar</a>
                        </li>
                        <li class="nav-item">
                            <a href="galeri.php" class="nav-link">Galeri</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="users.php" class="nav-link topnav-right">Users</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link topnav-right">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <br /><br />
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="font-family:'Old Standard TT', serif;"> Edit Users</h1><br />
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="modal-title">Edit Users</div>
                            </div>
                            <div class="card-body">
                                <?php
                                include '../koneksi.php';
                                $id = $_GET['id'];
                                $data = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
                                while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                <form method="POST" action="update_users.php">
                                        <div class="form-group">
                                            <label>Nama  </label> 
                                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                            <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Username  </label> 
                                            <input type="text" class="form-control" name="username" value="<?php echo $d['username']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Password  </label> 
                                            <input type="password" class="form-control" name="password" value="<?php echo $d['password']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Level Users</label>
                                            <select name="level" class="form-control" required>
                                                <option value="">--- Pilih Level ---</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Resepsionis</option>

                                            </select>
                                        </div>
                                    <button type="submit" class="btn btn-primary"
                                        style="background-color:#bfa145; color:black;">Update</button>
                                </form>
                                <?php } ?>
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
    <!-- bs-custom-file-input -->
    <script src="../assets\plugins\bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>


</body>

</html>