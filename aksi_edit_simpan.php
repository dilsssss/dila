<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$no_simpan      = $_POST['no_simpan'];
$tanggal    	= $_POST['tanggal'];
$no_anggota     = $_POST['no_anggota'];
$jml_simpan     = $_POST['jml_simpan'];
$kode_ksr		= $_POST['kode_ksr'];

// update data ke database
mysqli_query($koneksi,"UPDATE tbl_simpan SET no_simpan='$no_simpan', tanggal='$tanggal', no_anggota='$no_anggota', jml_simpan='$jml_simpan', kode_ksr='$kode_ksr' where no_simpan='$no_simpan'");
 
 
// mengalihkan halaman kembali ke index.php
header("location:simpan.php");
?>