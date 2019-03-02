<?php
include("koneksi.php");
include("auth-karyawan.php");
?>
<!DOCTYPE html>
<html>
    <head>
<title>Home</title>
<link href="style.css" rel="stylesheet" >
    </head>
    <body>
<div class="container">
    <div id="header">
    <h1 id="logo">Sistem Informasi <span>Pengajuan</span></h1>
    </div>
<nav>
    <ul>
    <li><a href="home-karyawan.php">Home</a></li>
    <li><a href="profil-karyawan.php">Lihat Profil</a></li>
    <li><a href="pengajuan.php">Buat Pengajuan Beasiswa</a></li>
    <li><a href="status-pengajuan.php">Lihat Status Pengajuan</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
    <h1>Selamat Datang <?php 
    // echo $_SESSION[user];
    $query_nama= "SELECT * from karyawan where username='$_SESSION[user]'";
    $hasil_query=mysqli_query($koneksi,$query_nama);
    $nama_karyawan=mysqli_fetch_array($hasil_query);
    echo $nama_karyawan['nama'];
    ?>
    </h1>
</div>
    </body>

</html>