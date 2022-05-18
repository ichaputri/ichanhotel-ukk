<?php include 'koneksi.php';
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
    <title>IchanHotel | Prosbook</title>

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

    .wrapper {
        background-image: url("assets/images/bg.jpg");
        background-size: cover;
        background-position: center;
        height: 100%;
    }

    p {
        font-family: "Consolas";
        font-size: 20px;
    }
    </style>
</head>

<body class="hold-transition sidebar-collapse layout-top-nav layout-navbar-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark" style="background-color:#1E1E23;">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="assets/images/logo.png" alt="AdminLTE Logo" style="opacity: .8">
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
                            <a href="index3.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="kamar.php" class="nav-link">Kamar</a>
                        </li>
                        <li class="nav-item">
                            <a href="fasilitas.php" class="nav-link">Fasilitas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <br /><br />
        <br /><br />
        <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="font-family:'Old Standard TT', serif;"> IchanHotel | Print </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
                <br><br>
                <div class="container">
                    <div class="col-md-12">
                        <div class="card" style="background-color:#DEDEDA; vertical-align:middle;">
                            <div class="card-body">
                                <div class="modal-body">
                                <?php
                                        $id_kamar = ($_GET['id_kamar']);
                                        
                                        $query = "SELECT * FROM pesanan WHERE id_pesanan='$id_pesanan'";
                                        $result = mysqli_query($koneksi, $query);
                                        if (!$result) {
                                            die("Query Error: ".mysqli_error($koneksi). "-".mysqli_error($koneksi));
                                        }
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="form-group">
                                        <label>Tanggal Check-in</label>
                                        <input type="date" name="cek_in" value="<?php echo $row['cek_in']; ?>"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Check-out</label>
                                        <input type="date" name="cek_out" value="<?php echo $row['cek_out']; ?>"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Kamar</label>
                                        <input type="text" name="jml_kamar" value="<?php echo $row['jml_kamar']; ?>"
                                            class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Pemesan</label>
                                        <input name="id_pesanan" value="<?php echo $row['id_pesanan']; ?>" hidden>
                                        <input type="text" name="nama_pemesan" class="form-control"
                                            value="<?php echo $row['nama_pemesan']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Pemesan</label>
                                        <input type="text" name="email_pemesan" class="form-control"
                                            value="<?php echo $row['email_pemesan']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Handphone</label>
                                        <input type="text" name="hp_pemesan" class="form-control"
                                            value="<?php echo $row['hp_pemesan']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Tamu</label>
                                        <input type="text" name="nama_tamu" class="form-control"
                                            value="<?php echo $row['nama_tamu']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Kamar</label>
                                        <select name="id_kamar" class="form-control" required>
                                            <option value="">--- Pilih Kamar ---</option>
                                            <?php
                                            include 'koneksi.php';
                                            $row = mysqli_query($koneksi, "select * from kamar");
                                            while ($d = mysqli_fetch_array($row)) { 
                                                ?>
                                            <option value="<?php echo $d['id_kamar']; ?>">
                                                <?php echo $d['tipe_kamar']; ?>
                                            </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <?php } ?>
                                        </div>
                                    <div style="background-color:#DAA520; border: 3px #DAA520 double; padding: 10px; text- align: left;">
                                Print halaman ini dan tunjukkan kepada resepsionis saat akan check-in.
                            </div>
                            <br>
                            <div style="text-align:right;">
                                <a class="no-print btn btn-warning" href="javascript:printDiv('print-area-3');">
                                    <i class="fas fa-print"></i>
                                    Print</a>
                            </div>

                            <br>




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
    <br>
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
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>


</body>

</html>