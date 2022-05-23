<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pinjam</title>

</head>
<body>
    <div class="navbar-nav">
            <h3><a class="nav-link active" aria-current="page" href="dashboard.php">Home</a></h3>
            <h2>DATA PINJAM</h2>
      </div>
    <div class="container mt-4">
        <div class="container-fluid">
        
        <button class="btn btn-warning btn-sm mb-3" data-toggle="modal" data-target=""><i class="fas fa-plus fa-sm"></i> <a href="tambah_pinjam.php"><b>+ Pinjam</b></a></button><br><br>
    <table border= "4" class="table table-bordered mt-4">
        <tr>
            <th>No Pinjam</th>
            <th>Tanggal</th>
            <th>No Angggota</th>
            <th>Jumlah Pinjam</th>
            <th>Kode Kasir</th>
            <th>aksi</th>
        </tr>

        <?php
        include "koneksi.php";
        $sql = mysqli_query($koneksi, "select * from tbl_pinjam");
        while($data = mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?php echo $data['no_pinjam']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['no_anggota']; ?></td>
                <td><?php echo $data['jml_pinjam']; ?></td>
                <td><?php echo $data['kode_ksr']; ?></td>
                <td>
                    <a href="pinjam_edit.php?id=<?php echo $data['no_pinjam'];?> ">Edit</a>
                    <a href="pinjam_delete.php?no_pinjam=<?php echo $data['no_pinjam'];?> ">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
        <form class="d-flex">
        <br><button><a class="btn btn-outline-success" href="logout.php">Logout</a></button>
        </div>
</body>
</html>