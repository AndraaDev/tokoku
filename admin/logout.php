<?php 
require '../assets/koneksi/koneksi.php';
session_start();
session_destroy();
header("Location:../index.php");
?>