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
    <title>TAMPILKAN DATA</title>
</head>
<body>

<a href="input.php">INPUT DATA</a>
<a href="../logout.php">LOGOUT</a>
<a href="upload_foto.php">UPLOAD FOTO</a>

<table border = 1px>
    <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Jenis Kelamin</th>
        <th>Tahun Akademik</th>
        <th>Semester</th>
        <th>IPK</th>
        <th>SKS</th>
        <th>FOTO</th>
    </tr>

    <?php

    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    while ($data = mysqli_fetch_array($query)) {
        ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['jurusan']; ?></td>
        <td><?php echo $data['program_studi']; ?></td>
        <td><?php echo $data['angkatan']; ?></td>
        <td><?php echo $data['jenis_kelamin']; ?></td>
        <td><?php echo $data['tahun_akademik']; ?></td>
        <td><?php echo $data['semester']; ?></td>
        <td><?php echo $data['ipk']; ?></td>
        <td><?php echo $data['sks']; ?></td>
        <td><?php echo $data['foto']; ?></td>
    </tr>
        <?php }
        ?>
        
</table>
</body>
</html>

<?php
}
?>