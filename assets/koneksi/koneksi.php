<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'tokoku');
if (!$koneksi) {
    echo 'Gagal terhubung ke database';
}

function TambahKategori($post)
{
    global $koneksi;
    $namakategori = htmlspecialchars($_POST['namakategori']);
    $insert = mysqli_query($koneksi, "INSERT INTO tbl_kategori SET namakategori='$namakategori'");
    if ($insert) {
        return true;
    } else {
        return false;
    }
}

function CekInputKategori($post)
{
    global $koneksi;
    $namakategori = htmlspecialchars($_POST['namakategori']);
    $cekdata = mysqli_query($koneksi, "SELECT namakategori FROM tbl_kategori WHERE namakategori='$namakategori' ");
    if (mysqli_num_rows($cekdata) > 0) {
        return true;
    } else {
        return false;
    }
}

function Daftar($post)
{
    global $koneksi;
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $konfirmasipassword = htmlspecialchars($_POST['konfirmasipassword']);
    $insert = mysqli_query($koneksi, "INSERT INTO tbl_user SET namalengkap='$nama',username='$username',password='$password',level='kasir'");
    if ($insert) {
        return true;
    } else {
        return false;
    }
}
function CekUsername()
{
    global $koneksi;
    $username = htmlspecialchars($_POST['username']);
    $cek = mysqli_query($koneksi, "SELECT username FROM tbl_user WHERE username='$username' ");
    if (mysqli_num_rows($cek) > 0) {
        return true;
    } else {
        return false;
    }
}

function CekIDBarang($post)
{
    global $koneksi;
    $idbarang = htmlspecialchars($_POST['idbarang']);
    $cekid = mysqli_query($koneksi, "SELECT idbarang FROM tbl_barang WHERE idbarang='$idbarang'");
    if (mysqli_num_rows($cekid) > 0) {
        return true;
    } else {
        return false;
    }
}

function TambahBarang($post){
    global $koneksi;
    $kodebarang=htmlspecialchars($_POST['kodebarang']);
    $namabarang=htmlspecialchars($_POST['namabarang']);
    $kategoribarang=htmlspecialchars($_POST['kategoribarang']);
    $hargabeli=htmlspecialchars($_POST['hargabeli']);
    $hargajual=htmlspecialchars($_POST['hargajual']);
    $stok=htmlspecialchars($_POST['stok']);
    $diskon=htmlspecialchars($_POST['diskon']);

    $tambahbarangQuery=mysqli_query($koneksi,"INSERT INTO tbl_barang SET kodebarang='$kodebarang',namabarang='$namabarang',kategoribarang='$kategoribarang',hargabeli='$hargabeli',hargajual='$hargajual',stok='$stok',diskon='$diskon'");
    if ($tambahbarangQuery) {
    return true;
    }else {
        return false;
    }
}


