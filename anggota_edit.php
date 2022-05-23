<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT ANGGOTA</title>
</head>
<body>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sqr = mysqli_query($koneksi, "SELECT * FROM tbl_anggota where no_anggota = '$id'");
    while ($data = mysqli_fetch_array($sqr)) {
    ?>
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>
        <form method="post" action="aksi_edit_anggota.php">
            <table>
                <tr>
                     <td><div class="for-group"><label for="no_anggota">No Anggota</label></td>
                        <td>:</td>
                        <td><input type="text" name="no_anggota" class="form-control" value="<?php echo $data['no_anggota']; ?>"></td></div>
                </tr>
                <tr>
                    <td><div class="for-group"><label for="nama">Nama</label></td>
                        <td>:</td>
                        <td><input type="text" name="nama" class="form-control"value="<?php echo $data['nama']; ?>"></td></div>
                </tr>
                <tr>
                    <td><div class="for-group"><label for="wajib">Wajib</label></td>
                        <td>:</td>
                        <td><input type="text" name="wajib" class="form-control"value="<?php echo $data['wajib']; ?>"></td></div>
                </tr>
                <tr>
                    <td><div class="for-group"><label for="pokok">Pokok</label>
                    <td>:</td>
                    <td><input type="text" name="pokok" class="form-control" value="<?php echo $data['pokok']; ?>"></td></div>
                <tr>
                    <td><div class="for-group"><label for="saldo">Saldo</label>
                    <td>:</td>
                    <td><input type="text" name="saldo" class="form-control" value="<?php echo $data['saldo']; ?>"></td></div>
                <tr>
                        <td><button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button></td>
                </tr>
    </table>
    </form>
</div>
    <?php
    }
    ?>
</body>
</html>