<?php
include '../assets/koneksi/koneksi.php';
session_start();
if (isset($_POST['btnTambahdata'])) {
    $idbarang=htmlspecialchars($_POST['idbarang']);
    $namabarang=htmlspecialchars($_POST['namabarang']);
    $kategoribarang=htmlspecialchars($_POST['kategoribarang']);
    $hargabeli=htmlspecialchars($_POST('hargabeli'));
    $hargajual=htmlspecialchars($_POST['hargajual']);
    $stokbarang=htmlspecialchars($_POST['stokbarang']);
    $diskon=htmlspecialchars($_POST['diskon']);
    $idkategori=$hasil['id_kategori'];
    // Insert ke dalam tbl barang
    $tambahbarangquery=mysqli_query($koneksi,"INSERT INTO tbl_barang SET idbarang='$idbarang',namabarang='$namabarang',kategoribarang='$kategoribarang',hargabeli='$hargabeli',hargajual='$hargajual',stok='$stokbarang',diskon='$diskon',id_kategori='$idkategori'");
    if ($tambahbarangquery) {
    echo "Tambah barang berhasil";
    }else {
        echo "Tambah Barang gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TokoKu - Tambah Barang</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TokoKu</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Nav Item - 'Kelola Barang' -->
            <li class="nav-item active">
                <a class="nav-link" href="kelola-barang.php">
                    <i class="fas fa-database"></i>
                    <span>Kelola Barang</span></a>
            </li>

            <!-- Nav Item - 'Kelola Kategori' -->
            <li class="nav-item">
                <a class="nav-link" href="kelola-kategori.php">
                    <i class="fas fa-database"></i>
                    <span>Kelola Kategori</span></a>
            </li>

            <!-- Nav Item - 'Kelola Kategori' -->
            <li class="nav-item">
                <a class="nav-link" href="tambah-kasir.php">
                    <i class="fas fa-plus"></i>
                    <span>Tambah Kasir</span></a>
            </li>

            <!-- Nav Item - 'Profil saya' -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-user-alt"></i>
                    <span>Profil Saya</span></a>
            </li>

            <!-- Nav Item - 'ke menu login' -->
            <li class="nav-item">
                <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Keluar</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Pusat Notifikasi
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Lihat Semua Notifikasi</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ucfirst($_SESSION['username']) ?></span>
                                <img class="img-profile rounded-circle" src="../assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Barang</h1>
                    </div>

                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Barang</h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="form-group col-4">
                                                <label for="idbarang">ID Barang</label>
                                                <input type="text" name="idbarang" id="idbarang" class="form-control">
                                            </div>
                                            <div class="form-group col-8">
                                                <label for="namabarang">Nama Barang</label>
                                                <input type="text" name="namabarang" id="namabarang" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="kategoribarang">Kategori Barang</label>
                                            <select name="kategoribarang" id="kategoribarang" class="form-control">
                                                <?php
                                                $query = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                                                while ($hasil = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $hasil['id_kategori'] . '">' . $hasil['nama_kategori'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="hargabeli">Harga Beli</label>
                                                <input type="text" name="hargabeli" id="hargabeli" class="form-control" placeholder="Rp ">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="hargajual">Harga Jual</label>
                                                <input type="text" name="hargajual" id="hargajual" class="form-control" placeholder="Rp ">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="stokbarang">Stok</label>
                                                <input type="text" name="stokbarang" id="stokbarang" class="form-control">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="diskon">Diskon</label>
                                                <input type="text" name="diskon" id="diskon" class="form-control">
                                            </div>
                                        </div>
                                        <button type="submit" name="btnTambahdata" class="btn btn-primary">OK</button>
                                        <button class="btn btn-danger" onclick="location.reload()">Kosongkan Form</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

     <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                </div>
                <div class="modal-body">Apakah anda yakin ingin meninggalkan halaman ini?</div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal" selected>Batal</button>
                    <a class="btn btn-secondary" href="../index.php">Ya</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>