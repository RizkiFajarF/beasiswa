<?php
include("koneksi.php");
include("auth-panitia.php");

if(!isset($_GET['no_pengajuan'])) {
    header('Location: status-pengajuan.php');
}

//ambil id dari query string
$no_pengajuan=$_GET['no_pengajuan'];

//buat query untuk ambil data dari database
$query="SELECT * FROM pengajuan WHERE no_pengajuan=$no_pengajuan";
$hasil_query=mysqli_query($koneksi,$query);
$pengajuan=mysqli_fetch_assoc($hasil_query);

//jika data yang diedit tidak ditemukan
if(mysqli_num_rows($hasil_query)<1) {
    die("Data tidak ditemukan...");
}



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Status Pengajuan</title>
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
    <h3>Ubah Status Pengajuan</h3>
    <form action="proses-edit-status.php" method="post" >
    <fieldset>    
    <legend>Formulir</legend>
    <input type="hidden" name="no_pengajuan" value="<?php echo $pengajuan['no_pengajuan']; ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name=nama id="nama" value="<?php echo $pengajuan['nama']; ?>" />
        </p>
        <p>
            <label for="nama_anak">Nama Anak: </label>
            <input type="text" name=nama_anak id="nama_anak" value="<?php echo $pengajuan['nama_anak']; ?>"/>
        </p>
        <p>
        <label for="status_pengajuan">Status Pengajuan: </label>
        <input type="text" name="status_pengajuan" value="<?php echo $pengajuan['status_pengajuan']; ?>" />
        </p>
        <p>
        <label for="ket_status">Keterangan </label>
        <input type="text" name="ket_status" value="<?php echo $pengajuan['ket_status']; ?>" />
        </p>
</fieldset>

            <p>
                <input type="submit" name="submit" value="submit" />
            </p>
    </form>
</div>
</body>

    </html>