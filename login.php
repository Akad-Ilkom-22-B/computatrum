<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi Computatrum</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container">
      <div class="welcome">
        <h1>W E L C O M E</h1>
      </div>
      <div class="forum">
        <form action="" class="table" method = "post">
          <input type="text" name ="username" placeholder="Masukkan username anda" />
          <input type="password" name ="password" placeholder="Masukkan password anda" />
          <select name="akses" id="akses">
            <option value="" hidden>Login Sebagai</option>
            <option value="Admin">Admin</option>
            <option value="Mahasiswa Baru">Mahasiswa Baru</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Mahasiswa Tamu">Mahasiswa Tamu</option>
            <option value="Dosen">Dosen</option>
          </select>
          <button class="table" type="submit" name="masuk">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>

<?php
session_start();

include "koneksi.php";


$username = $_POST["username"];
$password = $_POST["password"];
$akses = $_POST["akses"];

if(isset($_POST['masuk'])){

    $query = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
    $data = mysqli_fetch_assoc($query);
    $countdata = mysqli_num_rows($query);

    if($countdata > 0){

      $_SESSION['id'] = $data['id'];
      $_SESSION['username'] = $data['username'];
      $_SESSION['password'] = $data['password'];
      $_SESSION['akses'] = $data['akses'];

      if ($_SESSION['akses'] == 'Admin') {
        header("Location: admin.php");
      }

      elseif($_SESSION['akses'] == 'Mahasiswa'){
        header("Location: beranda.php");
      }
      
    }

    else{
        echo 'Gagal Login';
    }
  }
?>