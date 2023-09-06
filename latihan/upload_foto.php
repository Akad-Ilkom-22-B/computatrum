<?php
session_start();
ob_start();

include '../db/koneksi.php';

if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
    echo "Anda harus login terlebih dahulu!";
    echo "<a href='../login.php'>Login</a>";
} else {
    define('INDEX', true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method = "post" enctype = "multipart/form-data">

<table>
    <tr>
        <td>FOTO</td>
        <td><input type="file" name = "gambar"></td>
    </tr>

    <tr>
        <td>
        <input type="submit" name="save" values = "simpan">
    </td>
    </tr>
</table>
    </form>
</body>
</html>

<?php

if(isset($_POST['save'])){
    $file = $_FILES['gambar']['name'];
    $path = $_FILES['gambar']['tmp_name'];
    $upload_directory = 'image/' .$file;

    if (move_uploaded_file($path, $upload_directory)) {

        $user_id = 1;

        $query = mysqli_query($koneksi, "UPDATE mahasiswa set foto = '$file' where  id = '$user_id'");

        if ($query) {
            echo "File berhasil diupload dan disimpan ke database.";
        } else {
            echo "Gagal menyimpan data ke database.";
        }
    } else {
        echo "Gagal mengupload file.";
    }
}
}

?>