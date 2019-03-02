<?php
include("koneksi.php");
include("auth-karyawan.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pengajuan B</title>
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
    <h3>Status Pengajuan</h3>
    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Anak</th>
            <th>Pendidikan Anak</th>
            <th>Berkas Nilai</th>
            <th>Berkas Kelakuan Baik</th>
            <th>Status Pengajuan</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // CARI NAMA KARYAWAN DULU
        $query_nama= "SELECT * from karyawan where username='$_SESSION[user]'";
    $hasil_query_karyawan=mysqli_query($koneksi,$query_nama);
    $nama_karyawan=mysqli_fetch_array($hasil_query_karyawan);
    //nama karyawan disimpan dalam araray $nama_karyawan['nama'];
    //echo $nama_karyawan['nama'];
    //tampilin cuma punya user sendiri : $query="SELECT no_pengajuan,nama_anak,pendidikan,alamat_berkas_nilai,alamat_berkas_baik,status_pengajuan,ket_status FROM pengajuan WHERE nama='$nama_karyawan[nama]'";

        $query="SELECT no_pengajuan,nama_anak,pendidikan,alamat_berkas_nilai,alamat_berkas_baik,status_pengajuan,ket_status FROM pengajuan";
        $hasil_query=mysqli_query($koneksi,$query);
        while($pengajuan = mysqli_fetch_array($hasil_query)) {
            echo "<tr>";
            echo "<td>".$pengajuan['no_pengajuan']."</td>";
            echo "<td>".$pengajuan['nama_anak']."</td>";
            echo "<td>".$pengajuan['pendidikan']."</td>";
            echo "<td> <a href=$pengajuan[alamat_berkas_nilai]>Berkas Nilai </a> </td>";
            echo "<td> <a href=$pengajuan[alamat_berkas_baik]>Berkas Kelakuan Baik </a> </td>";
            echo "<td>".$pengajuan['status_pengajuan']."</td>";
            echo "<td>".$pengajuan['ket_status']."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
  
</div>
</body>

    </html>