
<?php
include("koneksi.php");
include("auth-karyawan.php");

if (isset($_POST['submit'])) {

//ambil data berkas nilai
$nama_berkas_nilai = $_FILES["berkas_nilai"]["name"];
$nama_sementara_berkas_nilai=$_FILES['berkas_nilai']['tmp_name'];

//tentukan lokasi yang akan dipindahkan
$dir_upload="folder-berkas/";

//pindahkan file berkas nilai
$pindah_berkas_nilai=move_uploaded_file($nama_sementara_berkas_nilai,$dir_upload.$nama_berkas_nilai);

//ambil data berkas kelakuan baik
$nama_berkas_baik = $_FILES["berkas_kelakuan_baik"]["name"];
$nama_sementara_berkas_baik=$_FILES['berkas_kelakuan_baik']['tmp_name'];

//tentukan lokasi yang akan dipindahkan
$dir_upload="folder-berkas/";

//pindahkan file berkas2
$pindah_berkas_baik=move_uploaded_file($nama_sementara_berkas_baik,$dir_upload.$nama_berkas_baik);

    $nip=$_POST['nip'];
    $nama=$_POST['nama'];
    $jabatan=$_POST['jabatan'];
    $divisi=$_POST['divisi'];
    $mulai_kerja=$_POST['mulai_kerja'];
    $gaji_pokok=$_POST['gaji_pokok'];
    $nik_anak=$_POST['nik'];
    $nama_anak=$_POST['nama_anak'];
    $pendidikan=$_POST['pendidikan'];
    $sekolah=$_POST['sekolah'];
    $ranking=$_POST['ranking'];
    $ipk=$_POST['ipk'];
    $no_berkas_nilai=$_POST['no_berkas_nilai'];
    $no_berkas_baik=$_POST['no_berkas_baik'];
    $status_pengajuan=$_POST['status_pengajuan'];
    $ket_status=$_POST['ket_status'];
    
    $alamat_berkas_nilai = $dir_upload.$nama_berkas_nilai;
    $alamat_berkas_baik =  $dir_upload.$nama_berkas_baik;

    //buat query
    $query="INSERT INTO pengajuan (nip,nama,jabatan,divisi,mulai_kerja,gaji_pokok,nik_anak,nama_anak,pendidikan,sekolah,ipk,ranking,no_berkas_nilai,no_berkas_baik,alamat_berkas_nilai,alamat_berkas_baik,status_pengajuan,ket_status) VALUES ('$nip','$nama','$jabatan','$divisi','$mulai_kerja',$gaji_pokok,'$nik_anak','$nama_anak','$pendidikan','$sekolah',$ipk,$ranking,'$no_berkas_nilai','$no_berkas_baik','$alamat_berkas_nilai','$alamat_berkas_baik','$status_pengajuan','$ket_status')";
    $hasil_query=mysqli_query($koneksi,$query);

    //cek query
    if($hasil_query) {
            //jika berhasil direct ke halaman index.php dengan status sukses
            header('Location: home-karyawan.php?status=sukses');
        } else{
            //jika gagal direct ke halaman index.php dengan status gagal
            header('Location: home-karyawan.php?status=gagal');
        }

    
} else {
    die("akses dilarang...");
}

?>