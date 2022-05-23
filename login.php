<?php
    //import file koneksi.php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
    <h1>Hallo !</h1>
    <form action="cek_login.php" method="post">
        <table>
            <tr>
                <td>username</td>
                <td>:</td>
                <td><input type="text" name="nama_ksr" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><input type="password" name="password_ksr" placeholder="Masukkan password"></td>
            </tr>
        </table>
        <br><input type="submit" value="LOGIN">
    </form>
    </center>
</body>
</html>