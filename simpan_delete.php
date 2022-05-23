<?php
//koneksi database
include 'koneksi.php';

// menangkap data url
$no_simpan = $_GET['no_simpan'];

//menghapus
mysqli_query($koneksi, "DELETE FROM tbl_simpan WHERE no_simpan='$no_simpan'");
header("location:simpan.php");
?>