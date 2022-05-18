<nav class="main-header navbar navbar-expand-md navbar-dark" style="background-color:#1E1E23;">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="../assets/images/logo.png" alt="AdminLTE Logo" style="opacity: .8">
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="pesanan.php" class="nav-link">Pesanan</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="" class="nav-link"><?php echo $_SESSION['username']?></a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link topnav-right">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>