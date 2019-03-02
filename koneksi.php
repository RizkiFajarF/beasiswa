<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="beasiswa";

$koneksi=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//cek koneksi, tampilkan pesan kesalahan jika gagal
if(!$koneksi) {
    die("koneksi ke database gagal ". mysqli_connect_errno(). " - " . 
    mysqli_error());
}
?>