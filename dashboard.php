<?php
    //import file koneksi.php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Utama</title>
</head>
<body>
<center>
  <h2>Selamat Datang!</h2><hr><br><br>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="anggota.php">Data Anggota</a><br>
            <a class="nav-link active" aria-current="page" href="pinjam.php">Data Pinjam</a><br>    
            <a class="nav-link active" aria-current="page" href="simpan.php">Data Simpan</a>  
          </div>
        </div>
        <form class="d-flex">
        <br><button><a class="btn btn-outline-success" href="logout.php">Logout</a></button>
      </form>
      </div>
    </nav>
    </div>
</body>
</html>