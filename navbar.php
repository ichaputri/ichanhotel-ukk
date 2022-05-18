//logo ichanhotel
<nav class="main-header navbar navbar-expand-md navbar-dark" style="background-color:#1E1E23;">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="assets/images/logo.png" alt="AdminLTE Logo" style="opacity: .8">
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

<!-- jika belum login -->
        <?php 
                if (empty($_SESSION['username']) AND empty($_SESSION['password'])){ ?>
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
                    <a href="fasilitas.php" class="nav-link">Fasilitas</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="login.php" class="nav-link topnav-right">Sign in</a>
                </li>
            </ul>
        </div>
        
<!-- jika sudah login -->
        <?php } else { ?>
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
                    <a href="fasilitas.php" class="nav-link">Fasilitas</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="" class="nav-link"><?php echo $_SESSION['username']?></a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link topnav-right">Sign Out</a>
                </li>
            </ul>
        </div>
        <?php } ?>
</nav>