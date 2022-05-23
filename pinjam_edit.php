<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT PINJAM</title>
</head>
<body>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sqr = mysqli_query($koneksi, "SELECT * FROM tbl_pinjam where no_pinjam = '$id'");
    while ($data = mysqli_fetch_array($sqr)) {
    ?>
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>DATA PINJAM</h3>
        <form method="post" action="aksi_edit_pinjam.php">
            <table>
                <tr>
                     <td><div class="for-group"><label for="no_pinjam">No pinjam</label></td>
                        <td>:</td>
                        <td><input type="text" name="no_pinjam" class="form-control" value="<?php echo $data['no_pinjam']; ?>"></td></div>
                </tr>
                <tr>
                     <td><div class="for-group"><label for="tanggal">tanggal</label></td>
                        <td>:</td>
                        <td><input type="date" name="tanggal" class="form-control"value="<?php echo $data['tanggal']; ?>"></td></div>
                </tr>
                <tr>
                     <td><div class="for-group"><label for="no_anggota">no anggota</label></td>
                        <td>:</td>
                        <td><input type="text" name="no_anggota" class="form-control"value="<?php echo $data['no_anggota']; ?>"></td></div>
                </tr>
                <tr>
                     <td><div class="for-group"><label for="jml_pinjam">jml pinjam</label></td>
                        <td>:</td>
                        <td><input type="text" name="jml_pinjam" class="form-control"value="<?php echo $data['jml_pinjam']; ?>"></td></div>
                </tr>
                <tr>
                     <td><div class="for-group"><label for="kode_ksr">kode ksr</label></td>
                        <td>:</td>
                        <td><input type="text" name="kode_ksr" class="form-control"value="<?php echo $data['kode_ksr']; ?>"></td></div>
                </tr>
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