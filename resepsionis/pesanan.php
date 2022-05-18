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
    <link rel="shortcut icon" type="icon" href="../assets/images/favicon.ico" />
    <title>IchanHotel | Booking</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">

    <style>
    a.disabled {
        pointer-events: none;
        cursor: default;
    }
    </style>
</head>

<body class="hold-transition dark-mode sidebar-collapse layout-top-nav layout-navbar-fixed">
    <div class="wrapper">

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
                        <div class="col-md-12">
                            <h1 class="m-0" style="font-family:'Old Standard TT', serif;"> Booking Kamar</h1><br />
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah">
                                    <i class="fas fa-plus"></i> Tambah
                                </button>
                                <div style="text-align:right;">
                                    <a class="no-print btn btn-warning" href="javascript:printDiv('print-area-3');">
                                        <i class="fas fa-print"></i>
                                        Print Report</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="print-area-3" class="print-area">
                                    <table id="example2" class="table table-bordered">

                                        <thead>

                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Nama Tamu</th>
                                                <th>Tanggal Check-in</th>
                                                <th>Tanggal Check-out</th>
                                                <th>Tipe Kamar</th>
                                                <th>Jumlah Kamar</th>
                                                <th>Total Harga</th>
                                                <th>Kode Res</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "select * from pesanan");
                                        while($d = mysqli_fetch_array($data)){
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $d['nama_tamu']; ?></td>
                                                <td><?php echo $d['cek_in']; ?></td>
                                                <td><?php echo $d['cek_out']; ?></td>
                                                <td>
                                                    <?php 
                                                $kamar = mysqli_query($koneksi, "select * from kamar");
                                                while ($a = mysqli_fetch_array($kamar)) {
                                                    if ($a['id_kamar'] == $d['id_kamar']) { ?>
                                                    <?php echo $a['tipe_kamar']; ?>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                                </td>
                                                <td><?php echo $d['jml_kamar']; ?></td>
                                                <td>

                                                    <?php
                                               $kamar = mysqli_query($koneksi, "select * from kamar");
                                               while ($a = mysqli_fetch_array($kamar)) {
                                                   if ($a['id_kamar'] == $d['id_kamar']) { ?>
                                                    Rp. <?php echo $a['harga']*$d['jml_kamar'];?>
                                                    <?php
                                                }
                                               }
                                               ?>
                                                </td>
                                                <td><?php echo $d['koderes']; ?></td>
                                                <td>
                                                    <?php 
                                                if ($d['status'] == 1) { ?>
                                                    <span class="badge bg-warning">Belum Di Konfirmasi</span>
                                                    
                                                    <?php } else { ?>
                                                    <span class="badge bg-success">Sudah Di Konfirmasi</span>
                                                    <?php } ?>

                                                </td>
                                                <td>
                                                    <?php
                                                    if ($d['status'] == 1) { ?>
                                                        <a href="checkout.php?id_pesanan=<?php echo $d['id_pesanan']; ?>"
                                                        class="btn btn-warning disabled"><i class="fas fa-edit" ></i>
                                                        Checkout</a>
                                                    <?php }else { ?>
                                                        <a href="checkout.php?id_pesanan=<?php echo $d['id_pesanan']; ?>"
                                                        class="btn btn-warning"><i class="fas fa-edit" ></i>
                                                        Checkout</a>
                                                    <?php } ?>
                                                    <form action="aksi_konfirmasi.php" method="post">
                                                        <input type="hidden" name="id_pesanan"
                                                            value="<?php echo $d['id_pesanan']; ?>">
                                                        <input type="hidden" name="status" value="2">
                                                        <br><button class="btn btn-warning btn-sm"><i
                                                                class="fas fa-circle-check"></i> Konfirmasi </button>
                                                    </form><br>

                                                </td>
                                            </tr>

                                            <?php
                                        }
                                        ?>
                                        </tbody>

                                    </table>
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
    <!-- bs-custom-file-input -->
    <script src="../assets\plugins\bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/plugins/jszip/jszip.min.js"></script>
    <script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>

    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "searching": true,
            "ordering": true,
        });
    });
    </script>
    <script>
    function printDiv(elementId) {
        var a = document.getElementById('printing-css').value;
        var b = document.getElementById(elementId).innerHTML;
        window.frames["print_frame"].document.title = document.title;
        window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();
    }
    </script>

    <textarea id="printing-css"
        style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}</textarea>
    <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>


    <div class="modal fade" id="tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Pesanan Kamar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../proses_pesan.php" method="post">
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
                            <input type="text" name="jml_kamar" class="form-control" placeholder="Jumlah Kamar"
                                required>
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
                            <input type="text" name="nama_tamu" class="form-control" placeholder="Masukan Nama Tamu"
                                required>
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
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    </div>
    </div>
</body>

</html>