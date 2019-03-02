<?php
include("koneksi.php");
include("auth-panitia.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Seleksi Penerima</title>
        <link href="style.css" rel="stylesheet" >
</head>
<body>
<div class="container">
<div id="header">
    <h1 id="logo">Sistem Informasi <span>Pengajuan</span></h1>
    </div>
<nav>
    <ul>
    <li><a href="home-panitia.php">Home</a></li>
    <li><a href="profil-panitia.php">Lihat Profil</a></li>
    <li><a href="verifikasi-berkas.php">Verifikasi Pengajuan</a></li>
    <li><a href="menyeleksi-penerima.php">Menyeleksi Penerimaan</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
    <h3>Status Pengajuan</h3>
    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Bekerja Sejak</th>
            <th>Nama Anak</th>
            <th>Pendidikan Anak</th>
            <th>Ranking</th>
            <th>IPK</th>
            <th>Berkas Nilai</th>
            <th>Berkas Kelakuan Baik</th>
            <th>Status Pengajuan</th>
            <th>Keterangan</th>
            <th>Edit Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // CARI NAMA KARYAWAN DULU
        $query_nama= "SELECT * from karyawan where username='$_SESSION[user]'";
    $hasil_query_karyawan=mysqli_query($koneksi,$query_nama);
    $nama_karyawan=mysqli_fetch_array($hasil_query_karyawan);
    //nama karyawan disimpan dalam araray $nama_karyawan['nama'];

        $query="SELECT no_pengajuan,nama,mulai_kerja,nama_anak,pendidikan,ranking,ipk,alamat_berkas_nilai,alamat_berkas_baik,status_pengajuan,ket_status,no_pengajuan FROM pengajuan where status_pengajuan='Proses Pengajuan' ORDER BY mulai_kerja ASC";
        $hasil_query=mysqli_query($koneksi,$query);
        while($pengajuan = mysqli_fetch_array($hasil_query)) {
            echo "<tr>";
            echo "<td>".$pengajuan['no_pengajuan']."</td>";
            echo "<td>".$pengajuan['nama']."</td>";
            echo "<td>".$pengajuan['mulai_kerja']."</td>";
            echo "<td>".$pengajuan['nama_anak']."</td>";
            echo "<td>".$pengajuan['pendidikan']."</td>";
            echo "<td>".$pengajuan['ranking']."</td>";
            echo "<td>".$pengajuan['ipk']."</td>";
            echo "<td> <a href=$pengajuan[alamat_berkas_nilai]>Berkas Nilai </a> </td>";
            echo "<td> <a href=$pengajuan[alamat_berkas_baik]>Berkas Kelakuan Baik </a> </td>";
            echo "<td>".$pengajuan['status_pengajuan']."</td>";
            echo "<td>".$pengajuan['ket_status']."</td>";
            echo "<td>";
            echo "<a href='ubah-status.php?no_pengajuan=".$pengajuan['no_pengajuan']."'>Edit</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
  
</div>
</body>

    </html>