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
    <link rel="stylesheet" href="input.css">
</head>
<body>

<div class="registrasi">
    <div class="login">
<form action="" method = "post" enctype = "multipart/form-data">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name= "username"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="pass"></td>
        </tr>

        <tr>
            <td>Akses</td>
            <td><select name="akses" id="akses">
            <option value="" hidden>Login Sebagai</option>
            <option value="Admin">Admin</option>
            <option value="Mahasiswa Baru">Mahasiswa Baru</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Mahasiswa Tamu">Mahasiswa Tamu</option>
            <option value="Dosen">Dosen</option>
          </select></td>
        </tr></table>
</div>
<div class="mahasiswa">

<table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name= "nim"></td>
        </tr>

        <tr>
            <td>Nama Mahasiswa</td>
            <td><input type="text" name= "nama"></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td><input type="text" name= "jurusan"></td>
        </tr>

        <tr>
            <td>Program Studi</td>
            <td><input type="text" name= "prodi"></td>
        </tr>

        <tr>
            <td>Angkatan</td>
            <td><input type="text" name= "angkatan"></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name= "jk"></td>
        </tr>

        <tr>
            <td>Tahun Akademik</td>
            <td><input type="text" name= "tahun"></td>
        </tr>

        <tr>
            <td>Semester</td>
            <td><select name="semester" id="semester">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
          </select></td>
        </tr>

       

        <tr>
            <td>IPK</td>
            <td><input type="text" name= "ipk"></td>
        </tr>

        <tr>
            <td>SKS</td>
            <td><input type="text" name= "sks"></td>
        </tr>

        <tr>
        <td>FOTO</td>
        <td><input type="file" name = "gambar"></td>
    </tr>

</table></div>
<div class="tombol">
    <table>
    <tr>
            <td>
                <input type="submit" value= "save" name= "simpan">
            </td>
        </tr>
    </table>
</form>
</div>
<a href="../logout.php">logout</a>
</div>
</body>
</html>

<?php

$username = isset($_POST['username']) ? $_POST['username'] : '';
$Password = isset($_POST['pass']) ? $_POST['pass'] : '';
$Akses = isset($_POST['akses']) ? $_POST['akses'] : '';
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';
$prodi = isset($_POST['prodi']) ? $_POST['prodi'] : '';
$angkatan = isset($_POST['angkatan']) ? $_POST['angkatan'] : '';
$jk = isset($_POST['jk']) ? $_POST['jk'] : '';
$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
$semester = isset($_POST['semester']) ? $_POST['semester'] : '';
$ipk = isset($_POST['ipk']) ? $_POST['ipk'] : '';
$sks = isset($_POST['sks']) ? $_POST['sks'] : '';

if(isset($_POST['simpan'])){

    $file = $_FILES['gambar']['name'];
    $path = $_FILES['gambar']['tmp_name'];
    $upload_directory = 'image/' .$file;

    $query_login = "insert into login(username, password, akses)
    values('$username', '$Password','$Akses')";

    $query_mahasiswa =  "insert into mahasiswa(nim, nama, jurusan, program_studi, angkatan, jenis_kelamin, tahun_akademik, semester, ipk, sks)
    values('$nim', '$nama','$jurusan','$prodi','$angkatan','$jk','$tahun','$semester','$ipk','$sks')";

    if (move_uploaded_file($path, $upload_directory)) {

        $query_foto = "insert into foto(nim, foto) values('$nim', '$file')";

    } else {
        echo "Gagal mengupload foto.";
    }

    if(mysqli_query($koneksi, $query_login) && mysqli_query($koneksi, $query_mahasiswa) && mysqli_query($koneksi, $query_foto) ) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}

?>

<?php
}
?>