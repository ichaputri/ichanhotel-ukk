<?php 
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
    <title>IchanHotel</title>

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
                            <h1 class="m-0" style="font-family:'Old Standard TT', serif;"> IchanHotel</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12">
                    <?php 
                        if(isset($_GET['pesan'])){
                        if($_GET['pesan']=="gagal"){?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Peringatan !!!</h5>
                        Mohon maaf anda tidak bisa mengakses halaman ini
                    </div>
                    <?php }} ?>
                </div>
            </div>

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
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <!-- Form Pesan -->
                <form action="proses_pesan.php" method="post">
                    <div class="col-md-12 text-center">
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-sm-6">
                                        <label> Book Now! :</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="button" class="form-control"
                                            style="background-color:#bfa145; color:white; text-align:center;"
                                            data-toggle="modal" data-target="#pesan">Booking in here!</button>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="pesan">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background-color:#dedbd3;">
                                <div class="modal-header">
                                    <h4 class="modal-title">Form Pemesanan</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Tanggal Check-in</label>
                                        <input type="text" name="id_pesanan" class="form-control" hidden>
                                        <input type="date" name="cek_in" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Check-out</label>
                                        <input type="date" name="cek_out" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Kamar</label>
                                        <input type="text" name="jml_kamar" class="form-control"
                                            placeholder="Jumlah Kamar" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Pemesan</label>
                                        <input type="text" name="nama_pemesan" class="form-control"
                                            placeholder="Masukkan Nama Pemesan" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Pemesan</label>
                                        <input type="text" name="email_pemesan" class="form-control"
                                            placeholder="Masukan Email Pemesan" required>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Handphone</label>
                                        <input type="text" name="hp_pemesan" class="form-control"
                                            placeholder="Masukan No. Handphone" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Tamu</label>
                                        <input type="text" name="nama_tamu" class="form-control"
                                            placeholder="Masukan Nama Tamu" required>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Kamar</label>
                                        <select name="id_kamar" class="form-control" required>
                                            <option value="">--- Pilih Kamar ---</option>
                                            <?php
                                            include 'koneksi.php';
                                            $data = mysqli_query($koneksi, "select * from kamar");
                                            while ($d = mysqli_fetch_array($data)) { 
                                                ?>
                                            <option value="<?php echo $d['id_kamar']; ?>">
                                                <?php echo $d['tipe_kamar']; ?>
                                            </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-warning" name="kamardipesan"
                                        style="background-color:#bfa145; color:white;">Konfirmasi Pesanan</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>
                <!-- /Form Pesan -->

                <!--About-->
                <div class="card" style="background-color:#dedbd3; color: #46433b;">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h2 class="text-center" style="font-family:'Old Standard TT', serif;">Tentang Kami</h2>
                            <br>
                            <p style="text-align:center"> Lepaskan diri Anda ke Hotel Hebat, dikelilingi oleh keindahan
                                pegunungan yang indah,
                                danau, dan sawah menghijau. <br>
                                Nikmati sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari
                                terbenam yang memukau.<br>
                                Kid's Club yang luas - menawarkan beragam fasilitas dan kegiatan anak-anak yang akan
                                melengkapi kenyamanan keluarga. <br />
                                Convention Center kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar
                                di Bandung, mampu mengakomodasi hingga 3.000
                                delegasi. Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun mewujudkan acara
                                pernikahan adat yang mewah.
                            </p>
                        </div>
                    </div>
                    <!--/About-->
                </div>
            </div>
        </div>
        <!-- /.content -->


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