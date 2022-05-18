<?php include '../koneksi.php';

if (isset($_GET['id_kamar'])) {
    $id_kamar = ($_GET['id_kamar']);
    $query = "SELECT * FROM kamar WHERE id_kamar='$id_kamar'";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die('Query Error: '.mysqli_error($koneksi)."-".mysqli_error($koneksi));
    } 
    $data = mysqli_fetch_assoc($result);
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan di database');window.location='kamar.php';</script>";
    }
    
} else {
    echo "<script>alert('Masukkan Data');window.location='kamar.php';</script>";
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
    <title>IchanHotel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-collapse layout-top-nav layout-navbar-fixed">
    <divvvvv class="wrapper">

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
                            <h1 class="m-0" style="font-family:'Old Standard TT', serif;"> Kamar</h1><br />
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"
                                style="background-color:#bfa145; color:black; font-family:'Old Standard TT', serif;">
                                <h3>Edit Data Kamar</h3>
                            </div> 
                            <div class="card-body">
                                <div class="modal-body">
                                    <form method="post" action="update_kamar.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Foto Kamar</label>
                                            <img class="d-block" src="gambar/<?php echo $data['foto']; ?>"
                                                width="100%"><br />
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="foto" id="customFile" value="<?php echo $data['foto']; ?>">
                                                    <label class="custom-file-label" for="customFile" >Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tipe Kamar</label>
                                                <input type="hidden" name="id_kamar" value="<?php echo $data['id_kamar']; ?>">
                                                <input type="text" class="form-control"
                                                    value="<?php echo $data['tipe_kamar']; ?>" name="tipe_kamar"
                                                    placeholder="Tipe Kamar">
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Kamar </label>
                                                <input type="text" class="form-control" name="qty" placeholder="Masukkan Jumlah kamar yang ingin ditambahkan">
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Kamar/Malam</label>
                                                <input type="text" class="form-control" name="harga"
                                                    value="<?php echo $data['harga']; ?>">
                                            </div>

                                            <button type="submit" class="btn btn-primary" name="tambahkamar"
                                                style="background-color:#bfa145; color:black;">Update</button>

                                        </div>
                                    </form>
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