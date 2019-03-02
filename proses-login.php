<?php

    include("koneksi.php");

    //cek tombol login telah ditekan atau belum
    if(isset($_POST['login'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $level=$_POST['level'];
    }

    //buat query 
    $query="SELECT * from login where username='$username' AND password='$password' AND level='$level'";
    $hasil_query=mysqli_query($koneksi,$query);

    //cek login berhasil atau tidak 
    $cocok=mysqli_num_rows($hasil_query);
    if($cocok==1) {
    //bila cocok
        session_start();
        $_SESSION["user"]=$username;
        $_SESSION["nip"]=$nip;
        $_SESSION["level"]=$level;
        //direct ke laman yang sesuai level
        if($level=="karyawan") {
            header("Location: home-karyawan.php");
        }
        if ($level=="panitia") {
            header("Location: home-panitia.php");
        }
        if ($level=="admin") {
            header("Location: home-admin.php");
        }
    }
    else {
        header("Location: login.php?tidak-cocok");
    }
?>