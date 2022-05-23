<?php
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
$no_simpan      = $_POST['no_simpan'];
$tanggal    	= $_POST['tanggal'];
$no_anggota     = $_POST['no_anggota'];
$jml_simpan     = $_POST['jml_simpan'];
$kode_ksr		= $_POST['kode_ksr'];
// print_r($_POST);
// die();



// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tbl_simpan VALUES('$no_simpan','$tanggal','$no_anggota','$jml_simpan','$kode_ksr')");

// mengalihkan halaman kembali ke dosen.php
header("location:simpan.php");
?>