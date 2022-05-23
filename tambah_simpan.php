<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH SIMPAN</title>
</head>
<body>
 
 <div class="container-fluid mt-3">
    <h3><i class="fas fa-edit mt-4"></i>Isi Data Simpan</h3>
        <form method="post" action="aksi_add_simpan.php">
            <table>
                <tr>
                        <td><div class="for-group"><label for="no_simpan">No simpan</label></td>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="no_simpan" required></td></div>
                </tr>

                <tr>
                        <td><div class="for-group"><label for="tanggal">tanggal</label></td>
                        <td>:</td>
                        <td><input type="date" name="tanggal" class="form-control" required></td></div>
                </tr>

                <tr>
                        <td><div class="for-group"><label for="no_anggota">no anggota</label></td>
                        <td>:</td>
                        <td><input type="text" name="no_anggota" class="form-control" required></td></div>
                </tr>

                <tr>
                        <td><div class="for-group"><label for="jml_simpan">Jumlah simpan</label></td>
                        <td>:</td>
                        <td><input type="text" name="jml_simpan" class="form-control"  required></td></div>
                </tr>

                <tr>
                        <td><div class="for-group"><label for="kode_ksr">Kode Kasir</label></td>
                        <td>:</td>
                        <td><input type="text" name="kode_ksr" class="form-control" required></td></div>
                </tr>

                <tr>
                        <td><button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button> </td>
                </tr>  
    </table>
    </form>
</div>
</form>
</body>
</html>