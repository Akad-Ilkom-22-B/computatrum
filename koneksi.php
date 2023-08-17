<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_computatrum";

$koneksi = mysqli_connect($host, $username, $password, $dbname);

if (!$koneksi) {
    echo 'Koneksi gagal terhubung. Pesan error: ' . mysqli_connect_errno();
}

?>