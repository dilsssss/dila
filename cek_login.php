<!-- login.php -->
<?php
include "koneksi.php";

$nama_ksr = $_POST['nama_ksr'];
$password_ksr = $_POST['password_ksr'];

$query = mysqli_query($koneksi,"select * from tbl_kasir where nama_ksr='$nama_ksr' and password_ksr='$password_ksr'");
$cek = mysqli_num_rows($query);
if($cek > 0){
	$_SESSION['nama_ksr'] = $nama_ksr;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:login.php");
}
?>