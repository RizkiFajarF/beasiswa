<?php
include("koneksi.php");
include("auth-karyawan.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pengajuan Beasiswa</title>
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
    <h3>Formulir Pengajuan Beasiswa</h3>
    <form id="form-pengajuan" action="proses-pengajuan.php" method="post" enctype="multipart/form-data">
    <fieldset>    
    <legend>Formulir</legend>
        </p>
        <p>
            <label for="nip">NIP: </label>
            <input type="text" name=nip />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name=nama id="nama" />
        </p>
        <p>
            <label for="jabatan">Jabatan: </label>
            <input type="text" name=jabatan id="jabatan" />
        </p>
        <p>
            <label for="divisi">Divisi: </label>
            <select name=divisi id="divisi" >
                <option value="APP">APP</option>
                <option value="APG">APG</option>
                <option value="APB">APB</option>
                <option value="ACP">ACP</option>
                <option value="Koperasi Jasa">Koperasi Jasa</option>
            </select>
        </p>
        <p>
            <label for="mulai_kerja">Bekerja Sejak: </label>
            <input type="text" name=mulai_kerja id="mulai_kerja" />
        </p>
        <p>
            <label for="gaji_pokok">Gaji Pokok: </label>
            <input type="text" name=gaji_pokok id="gaji_pokok" />
        </p>
        <p>
            <label for="nik">NIK anak: </label>
            <input type="text" name=nik id="nik" />
        </p>
        
        <p>
            <label for="nama_anak">Nama Anak: </label>
            <input type="text" name=nama_anak id="nama_anak" />
        </p>
        <p>
            <label for="pendidikan">Pendidikan Anak: </label>
            <select name=pendidikan id="pendidikan" >
                <option value="SD">SD</option>
                <option value="SLTP">SLTP</option>
                <option value="SLTU">SLTU</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
            </select>
        </p>

        <p>
            <label for="sekolah">Sekolah Anak: </label>
            <input type="text" name=sekolah id="sekolah" />
        </p>

        <p>
            <label for="ipk">IPK anak (bila Mahasiswa): </label>
            <input type="text" name=ipk id="ipk" />
        </p>

        <p>
            <label for="ranking">Ranking Anak(bila pelajar): </label>
            <input type="text" name=ranking id="ranking" />
        </p>

        <p>
            <label for="no_berkas_nilai">No. Berkas Nilai: </label>
            <input type="text" name=no_berkas_nilai id="no_berkas_nilai" />
        </p>

        <p> 
        <label for="berkas_nilai">Upload Berkas Nilai</label>
        <input type="file" name="berkas_nilai" id="berkas_nilai" accept="application/pdf,image/*">
        </p>

        <p>
            <label for="no_berkas_baik">No Berkas Kelakuan Baik: </label>
            <input type="text" name=no_berkas_baik id="no_berkas_baik" />
        </p>
        <label for="berkas_nilai">Upload Berkas Kelakuan Baik</label>
        <input type="file" name="berkas_kelakuan_baik" id="berkas_kelakuan_baik" accept="application/pdf,image/*">
        </p>
        <input type="hidden" name="status_pengajuan" value="Verifikasi Berkas" />
        <input type="hidden" name="ket_status" value="-" />
</fieldset>

            <p>
                <input type="submit" name="submit" value="submit" />
            </p>
    </form>
</div>
</body>

    </html>
