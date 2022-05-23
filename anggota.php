<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA Anggota</title>
</head>
<body>
          <div class="navbar-nav">
            <h3><a class="nav-link active" aria-current="page" href="dashboard.php">Home</a></h3>
            <h2>DATA ANGGOTA</h2>
      </div>
    <div class="container mt-4">
        <div class="container-fluid">
        <button class="btn btn-warning btn-sm mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> <a href="tambah_anggota.php"><b>+ Anggota</b></a></button><br><br>
    <table border= "4" class="table table-bordered mt-4">
        <tr>
            <th>No Anggota</th>
            <th>nama</th>
            <th>wajib</th>
            <th>pokok</th>
            <th>saldo</th>
            <th>aksi</th>
        </tr>

        <?php
        include "koneksi.php";
        $sql = mysqli_query($koneksi, "select * from tbl_anggota");
        while($data = mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?php echo $data['no_anggota']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['wajib']; ?></td>
                <td><?php echo $data['pokok']; ?></td>
                <td><?php echo $data['saldo']; ?></td>

                <td>
                    <a href="anggota_edit.php?id=<?php echo $data['no_anggota'];?> ">Edit</a>
                    <a href="anggota_delete.php?no_anggota=<?php echo $data['no_anggota'];?> ">Hapus</a>
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