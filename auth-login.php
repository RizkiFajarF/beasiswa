<?php 
// untuk mengecek apakah sudah login atau belum 
session_start();
if(!isset($_SESSION["user"])) header("Location: login.php");
?>