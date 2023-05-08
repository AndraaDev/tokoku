<?php 
include '../assets/koneksi/koneksi.php';
$id=$_GET['idbarang'];
$query=mysqli_query($koneksi,"SELECT * FROM tbl_barang WHERE idbarang='$id'");
$data=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Barang</title>
</head>
<body>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?=$data['idbarang'];?>">
    <label for="">Nama barang</label>
    <input type="text" name="namabarang" id="namabarang" value="<?=$data['namabarang'];?>">
    </form>
</body>
</html>