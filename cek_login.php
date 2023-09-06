<?php
session_start();

include "db/koneksi.php";


$username = $_POST["username"];
$password = $_POST["password"];
$akses = $_POST["akses"];

if(isset($_POST['masuk'])){

    $query = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
    $data = mysqli_fetch_array($query);
    $countdata = mysqli_num_rows($query);

    $_SESSION['id'] = $data['id'];
      $_SESSION['username'] = $data['username'];
      $_SESSION['password'] = $data['password'];
      $_SESSION['akses'] = $data['akses'];


    // if($countdata > 0){

      
      if ($_SESSION['akses'] and  $akses  == 'Admin') {
        header("Location: admin/admin.php");
      }

      elseif($_SESSION['akses'] and $akses == 'Mahasiswa'){
        header("Location: mahasiswa/beranda.php");
      }
      
    }

    else{
        echo 'Gagal Login';
    }
  // }
?>