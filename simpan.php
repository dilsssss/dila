<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA SIMPAN</title>

</head>
<body>
        <div class="navbar-nav">
            <h3><a class="nav-link active" aria-current="page" href="dashboard.php">Home</a></h3>
            <h2>DATA SIMPAN</h2>
    <div class="container mt-4">
        <div class="container-fluid">
        
        <button class="btn btn-warning btn-sm mb-3" data-toggle="modal" data-target=""><i class="fas fa-plus fa-sm"></i> <a href="tambah_simpan.php"><b>+ Simpan</b></a></button><br><br>
    <table border= "4" class="table table-bordered mt-4">
        <tr>
            <th>No Simpan</th>
            <th>Tanggal</th>
            <th>No Angggota</th>
            <th>Jumlah SImpan</th>
            <th>Kode Kasir</th>
            <th>aksi</th>
        </tr>

        <?php
        include "koneksi.php";
        $sql = mysqli_query($koneksi, "select * from tbl_simpan");
        while($data = mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?php echo $data['no_simpan']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['no_anggota']; ?></td>
                <td><?php echo $data['jml_simpan']; ?></td>
                <td><?php echo $data['kode_ksr']; ?></td>

                <td>
                    <a href="simpan_edit.php?id=<?php echo $data['no_simpan'];?> ">Edit</a>
                    <a href="simpan_delete.php?no_simpan=<?php echo $data['no_simpan'];?> ">Hapus</a>
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