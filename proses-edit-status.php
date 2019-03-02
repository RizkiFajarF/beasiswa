<?php
include("koneksi.php");
include("auth-karyawan.php");

// // CARI NAMA KARYAWAN DULU
// $query_nama= "SELECT * from karyawan where username='$_SESSION[user]'";
// $hasil_query_karyawan=mysqli_query($koneksi,$query_nama);
// $nama_karyawan=mysqli_fetch_array($hasil_query_karyawan);


// //cek tombol simpan sudah diklik atau belum
// if(isset($_POST['submit'])) {
//     //ambil data dari formulir
//     $no_pengajuan=$_POST['no_pengajuan'];
//     $nama=$_POST['nama'];
//     $nama_anak=$_POST['nama_anak'];
//     $status_pengajuan=$_POST['status_pengajuan'];
//     $ket_status=$_POST['ket_status'];

    
// $query="UPDATE pengajuan SET nama='$nama', nama_anak='$nama_anak', status_pengajuan='$status_pengajuan', ket_status='$ket_status' WHERE nama_anak=$nama_anak";
// $hasil_query=mysqli_query($koneksi,$query);

//     //apakah update berhasil ?
//     if($hasil_query) {
//         header('Location: verifikasi-berkas.php');
//     } else {
//         die("Gagal menyimpan perubahan...");
//     }
// } else {
//     die("Akses dilarang...");
// }


include ("config.php");

//cek tombol simpan sudah diklik atau belum
if(isset($_POST['submit'])) {
    //ambil data dari formulir
    $no_pengajuan=$_POST['no_pengajuan'];
    $nama=$_POST['nama'];
    $nama_anak=$_POST['nama_anak'];
    $status_pengajuan=$_POST['status_pengajuan'];
    $ket_status=$_POST['ket_status'];
    
    //buat query update
    $query="UPDATE pengajuan SET nama='$nama', nama_anak='$nama_anak', status_pengajuan='$status_pengajuan', ket_status='$ket_status' WHERE no_pengajuan=$no_pengajuan";
    $hasil_query=mysqli_query($koneksi,$query);

    //apakah update berhasil ?
    if($hasil_query) {
        header('Location: verifikasi-berkas.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>


