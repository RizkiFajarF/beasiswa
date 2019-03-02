<?php
include("koneksi.php");
include("auth-admin.php");
?>
<!DOCTYPE html>
<html>
    <head>
<title> Home</title>
    </head>
    <body>
<nav>
    <ul>
    <li><a href="profil-admin.php">Lihat Profil</a></li>
    <li><a href="tambah-user.php">Tambah User</a></li>
    <li><a href="tambah-anak.php">Tambah Data Anak</a></li>
    <li><a href="pengajuan.php">Buat Pengajuan Beasiswa</a></li>
    <li><a href="status-pengajuan">Lihat Status Pengajuan</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
    <p>SELAMAT DATANG <?php 
    // echo $_SESSION[user];
    $query_nama= "SELECT * from karyawan where username='$_SESSION[user]'";
    $hasil_query=mysqli_query($koneksi,$query_nama);
    $nama_karyawan=mysqli_fetch_array($hasil_query);
    echo $nama_karyawan['nama'];
    ?>
    </p>
    </body>

</html>