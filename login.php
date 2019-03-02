<?php
//buat taruh header yang direct ke halaman home.php klo udah login
session_start();
if(isset($_SESSION["level"])) { header("Location: home-{$_SESSION['level']}.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Web Pengajuan </title>
    <style>
    body {
      background-color: #F8F8F8;
    }
    div.container {
      width: 380px;
      padding: 10px 50px 80px;
      background-color: white;
      margin: 20px auto;
      box-shadow: 1px 0px 10px, -1px 0px 10px ;
    }
    h1,h3 {
      text-align: center;
      font-family: Cambria, "Times New Roman", serif;
    }
    p {
      margin:0;
    }
    fieldset {
      padding:20px;
      width: 240px;
      margin: auto;
    }
    input {
      margin-bottom:10px;
    }
    input[type=submit] {
      float:right;
    }
    label {
      width:80px;
      float:left;
      margin-right:10px;
    }
  </style>
</head>
<body>
<div class="container">
    <h1>Selamat Datang</h1>
    <h3>Sistem Informasi Pengajuan Beasiswa</h3>
    <form action="proses-login.php" method="POST">    
        <fieldset>
        <legend>Login</legend>
            <p>
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" />
            </p>
            <p>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password"/>
            </p>
            <p>
            <label for="level">Level</label>
            <select name="level" id="level">
                <option name="karyawan" value="karyawan">karyawan</option>
                <option name="panitia" value="panitia">Panitia</option>
                <option name="admin" value="admin">Admin </option>
            </select>
            </p>
            <p>
                <input type="submit" name="login" value="login" />
        </fieldset>
    </form>
</div>
</body>
</html>