<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH ANGGOTA</title>
</head>
<body>
 
 <div class="container-fluid mt-3">
    <h3><i class="fas fa-edit mt-4"></i>Isi Data Anggota</h3>
        <form method="post" action="aksi_add_anggota.php">
            <table>
                <tr>
                        <td><div class="for-group"><label for="no_anggota">No Anggota</label>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="no_anggota" required></td></div>
                </tr>
                <tr>
                        <td><div class="for-group"><label for="nama">Nama</label>
                        <td>:</td>
                        <td><input type="text" name="nama" class="form-control" required></div></td>
                </tr>
                <tr>
                        <td><div class="for-group"><label for="wajib">Wajib</label>
                        <td>:</td>
                        <td><input type="text" name="wajib" class="form-control" required></div></td>
                </tr>
                <tr>
                        <td><div class="for-group"><label for="pokok">Pokok</label>
                        <td>:</td>
                        <td><input type="text" name="pokok" class="form-control"  required></div></td>
                </tr>
                <tr>
                        <td><div class="for-group"><label for="saldo">Saldo</label>
                        <td>:</td>
                        <td><input type="text" name="saldo" class="form-control" required></div></td>
                </tr> 
                <tr>
                        <td><button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button></td>
                </tr>    
    </table>
    </form>
</div>
</form>
</body>
</html>