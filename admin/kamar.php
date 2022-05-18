<?php
include '../koneksi.php';
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
    <link rel="shortcut icon" type="icon" href="../assets/images/favicon.ico" />
    <title>IchanHotel | Rooms </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-collapse layout-top-nav layout-navbar-fixed">
    <divvvvv class="wrapper">

        <!-- Navbar -->
        <?php include('navbar.php') ?>
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
                            <div class="card-header">
                                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah">
                                    <i class="fas fa-plus"></i> Tambah
                                </button>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Tipe Kamar</th>
                                            <th>Stock</th>
                                            <th>Harga Kamar/Malam</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM kamar ORDER BY id_kamar ASC";
                                        $result = mysqli_query($koneksi, $query);
                                        if (!$result) {
                                            die("Query Error: ".mysqli_error($koneksi). "-".mysqli_error($koneksi));
                                        }

                                        $no=1;

                                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo "$no"; ?></td>
                                            <td><?php echo $row['tipe_kamar']; ?></td>
                                            <td><?php echo $row['stock']; ?></td>
                                            <td>Rp. <?php echo $row['harga']; ?></td>
                                            <td>
                                                <img class="d-block" src="gambar/<?php echo $row['foto']; ?>"
                                                    width="300">
                                            </td>
                                            <td>
                                                <a href="edit_kamar.php?id_kamar=<?php echo $row['id_kamar']; ?>"
                                                    class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="hapus_kamar.php?id_kamar=<?php echo $row['id_kamar']; ?>"
                                                    class="btn btn-danger" style="color:#262626;"
                                                    onclick="return confirm('Anda yakin akan menghapus data ini...?')"><i
                                                        class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
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

        <div class="modal fade" id="tambah">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Kamar</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="tambah_kamar.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tipe Kamar</label>
                                <input type="text" class="form-control" name="tipe_kamar" placeholder="Tipe Kamar">
                            </div>
                            <div class="form-group">
                                <label>Harga Kamar/Malam</label>
                                <input type="text" class="form-control" name="harga" placeholder="Harga Kamar/Malam">
                            </div>
                            <div class="form-group">
                                <label>Tambahkan Stock</label>
                                <input type="text" class="form-control" name="stock" placeholder="Masukkan jumlah kamar yang tersedia">
                            </div>
                            <div class="form-group">
                                <label>Foto Kamar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose
                                        file</label>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
</body>

</html>