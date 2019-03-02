<?php
//untuk mengecek apakah login user sesuai level halaman atau tidak
session_start();
$level=$_SESSION['level'];
if($level!="panitia"){ 
    header("Location: home{-$level}.php");
}
?>