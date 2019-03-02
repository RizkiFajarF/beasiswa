
<?php
include("koneksi.php");
include("auth-panitia.php");

// query untuk profil
    $query_profil= "SELECT * from karyawan where username='$_SESSION[user]'";
    $hasil_query=mysqli_query($koneksi,$query_profil);
    $profil_karyawan=mysqli_fetch_array($hasil_query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Profil Panitia</title>
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
    <li><a href="menyeleksi-penerima">Menyeleksi Penerimaan</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
<div class="container2">
    <h3>Profil Panitia</h3>
    <form id="form-profil-karyawan" action="" method="post">
        <legend></legend>
        <div class="photo">
            <img src="photo/<?php echo $_SESSION['user']; ?>.jpg">
        </div>
        <p>
            <label for="nip">NIP: </label>
            <input type="text" name=nip value="<?php echo $profil_karyawan['nip']; ?>" disabled />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name=nama value="<?php echo $profil_karyawan['nama']; ?>" disabled />
        </p>
        <p>
            <label for="jabatan">Jabatan: </label>
            <input type="text" name=nama value="<?php echo $profil_karyawan['jabatan']; ?>" disabled />
        </p>
        <p>
            <label for="masa_bakti">Masa Bakti: </label>
            <input type="text" name=masa_bakti value="<?php echo $profil_karyawan['masa_bakti']; ?>" disabled />
        </p>
        <p>
            <label for="gaji_pokok">Gaji Pokok: </label>
            <input type="text" name=gaji_pokok value="<?php echo $profil_karyawan['gaji_pokok']; ?>" disabled />
        </p>
    </form>
</div>
</div>
</body>

    </html>
