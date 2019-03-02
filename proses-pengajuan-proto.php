<?php

//ambil data berkas1
$nama_berkas1=$_FILES['berkas1']['name'];
$nama_sementara1=$_FILES['berkas1']['tmp_name'];

//tentukan lokasi yang akan dipindahkan
$dir_upload="file-upload/";

//pindahkan file berkas1
$pindahfolder1=move_uploaded_file($nama_sementara1,$dir_upload.$nama_berkas1);

//ambil data berkas2
$nama_berkas2=$_FILES['berkas2']['name'];
$nama_sementara2=$_FILES['berkas2']['tmp_name'];

//tentukan lokasi yang akan dipindahkan
$dir_upload="file-upload/";

//pindahkan file berkas2
$pindahfolder2=move_uploaded_file($nama_sementara2,$dir_upload.$nama_berkas2);

//notif bila gagal upload berkas1
if($pindahfolder1) {
    echo "Upload berkas 1 berhasil!<br>";
    echo "Link: <a href='".$dir_upload.$nama_berkas1."'>".$nama_berkas1."</a>";
} else {
    echo "upload berkas 1 gagal! <br>";
}

//notif bila gagal upload berkas2
if($pindahfolder2) {
    echo "Upload berkas 2 berhasil!<br>";
    echo "Link: <a href='".$dir_upload.$nama_berkas2."'>".$nama_berkas2."</a>";
} else {
    echo "upload berkas 2 gagal! <br>";
}

?>