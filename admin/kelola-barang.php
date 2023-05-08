<?php
include '../assets/koneksi/koneksi.php';
session_start();
if (!$_SESSION['username']) {
    echo "<script>
    alert('Anda harus login terlebih dahulu!');
    window.location=('../index.php');
    </script>
    ";
}

// 
if (isset($_POST['btntambahbarang'])) {
    if (CekIDBarang($post) > 0) {
        echo "<script>
    alert('ID barang yang anda masukkan telah ada!');
    history.go(-1);
    </script>
    ";
    } else {
        if (TambahBarang($post)) {
            echo "<script>
        alert('Tambah barang berhasil!');
        history.go(-1);
        </script>
        ";
        } else {
            echo "<script>
        alert('Tambah barang gagal!');
        history.go(-1);
        </script>
        ";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TokoKu | Kelola Barang</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <!-- Logo website -->
    <link rel="shortcut icon" href="../assets/dist/img/tokoku-logo.png" type="image/x-icon">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-cog"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link text-white">
                <img src="../assets/dist/img/tokoku-logo.png" alt="Logo Website TokoKu" class="brand-image image-circle elevation-3" style="opacity: .8">
                <span class="brand-text">TokoKu</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= ucwords($_SESSION['username']) ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="kelola-barang.php" class="nav-link active">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Kelola Barang
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profile-saya.php" class="nav-link">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Profil Saya
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>
                                    Tentang Aplikasi Ini
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    History Login
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link" onclick="return confirm('Apakah anda yakin ingin keluar?')">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Keluar
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Kelola Barang</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Beranda</a></li>
                                <li class="breadcrumb-item active">Kelola Barang</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-filter"></i> Filter...</button>
                                        <a class="btn btn-primary" href="" data-toggle="modal" data-target="#tambahbarangModal"><i class="fas fa-plus"></i> Tambah Barang</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Urutkan dari yang terbaru</a>
                                            <a class="dropdown-item" href="#">Urutkan dari yang terlama</a>
                                            <a class="dropdown-item" href="#">Urutkan dari A-Z</a>
                                            <a class="dropdown-item" href="#">Urutkan dari Z-A</a>
                                        </div>
                                        <button class="btn btn-success" data-toggle="modal" data-target="#uploadexcelModal">
                                            <i class="fas fa-file-excel"></i>
                                            Upload data barang(excel)</button>
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Kategori Barang</th>
                                                <th>Harga Beli</th>
                                                <th>Harga Jual</th>
                                                <th>Stok</th>
                                                <th>Diskon</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $cetakdataQuery = mysqli_query($koneksi, "SELECT * FROM tbl_barang");
                                            $nomor = 1;
                                            while ($cetakData = mysqli_fetch_array($cetakdataQuery)) :
                                            ?>
                                                <tr>
                                                    <td><?= $nomor; ?></td>
                                                    <td><?= $cetakData['kodebarang']; ?></td>
                                                    <td><?= $cetakData['namabarang']; ?></td>
                                                    <td><?= $cetakData['kategoribarang']; ?></td>
                                                    <td><?= $cetakData['hargabeli']; ?></td>
                                                    <td><?= $cetakData['hargajual']; ?></td>
                                                    <td><?= $cetakData['stok']; ?></td>
                                                    <td>
                                                        <?php if ($cetakData['diskon']== 0) {?>
                                                        <span class="badge badge-danger"><?=$cetakData['diskon']?>%</span>
                                                        <?php }else{ ?>
                                                        <span class="badge badge-dark"><?=$cetakData['diskon']?>%</span>
                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="edit-barang.php?no=<?=$cetakData['idbarang']?>"><i class="fas fa-edit"></i> Edit</a>
                                                        <button class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php $nomor++;
                                            endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; <?php echo date('Y') ?> <a href="">TokoKu.co.id</a>.</strong>
            All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"],
                "paging": true,
                "searching": true,
                "responsive": true,
                "info": true,
                "ordering": true,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
    <!-- Modal Tambah Barang -->
    <div class="modal fade" id="tambahbarangModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <!-- awal row id barang dan nama barang -->
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="kodebarang">Kode Barang</label>
                                <input type="text" name="kodebarang" id="kodebarang" class="form-control" required>
                            </div>
                            <div class="form-group col-8">
                                <label for="namabarang">Nama Barang</label>
                                <input type="text" name="namabarang" id="namabarang" class="form-control" required>
                            </div>
                        </div>
                        <!-- akhir row id barang dan nama barang -->
                        <div class="form-group">
                            <label for="kategoribarang">Kategori Barang</label>
                            <select name="kategoribarang" id="kategoribarang" class="form-control" required>
                                <option value="Makanan Ringan">Makanan Ringan</option>
                                <option value="Minuman Dalam Kemasan">Minuman Dalam Kemasan</option>
                                <option value="Alat Tulis">Alat Tulis</option>
                                <option value="Alat Mandi">Alat Mandi</option>
                                <option value="Buah dan Sayur">Buah dan Sayur</option>
                                <option value="Alat Kelistrikan">Alat Kelistrikan</option>
                            </select>
                        </div>
                        <!-- awal row harga beli&jual -->
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="hargabeli">Harga Beli</label>
                                <input type="text" name="hargabeli" id="hargabeli" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="hargajual">Harga Jual</label>
                                <input type="text" name="hargajual" id="hargajual" class="form-control" required>
                            </div>
                        </div>
                        <!-- akhir row harga beli&jual -->

                        <!-- awal row stok&diskon -->
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="stok">Stok</label>
                                <input type="text" name="stok" id="stok" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="diskon">Diskon</label>
                                <input type="text" name="diskon" id="diskon" class="form-control" required>
                            </div>
                        </div>
                        <!-- akhir row stok&diskon -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary" name="btntambahbarang">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Akhir Modal Tambah Barang -->
    <!-- Awal modal tambah barang via file excel -->
    <div class="modal fade" id="uploadexcelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang Via File Excel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype='multipart/form-data'>
                        <div class="form-group">
                            <label>Upload sebuah file excel disini:</label>
                            <input type="file" name="excelfile" id="excelfile" class="form-control-file" accept=".xls,.xlsx" multiple="false">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary" name="btnuploadexcel">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Akhir modal tambah barang via file excel -->
</body>

</html>