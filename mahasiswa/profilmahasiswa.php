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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link rel="stylesheet" href="profilmahasiswa.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  </head>
  <body>

  <?php
        $id_user = $_SESSION['id'];
        $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id_user'");
        $data = mysqli_fetch_array($query);
        ?>

    <div class="container">
      <div class="header-section">
        <div class="nav-kanan">
          <div class="logo-profil">
            <a class="nav-link" href="#">
              <i class="fa fa-home" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="#">
              <i class="fa fa-bell" aria-hidden="true"></i>
            </a>
          </div>
          <div class="name-profil"><p><?php echo $data['nama'] ?></p></div>
        </div>
      </div>

      <div class="nav-section">
        <div class="icon">
          <div class="logo">
            <img src="https://i.postimg.cc/t4sTYhtN/20220819-091211-modified.png" alt="computatrum logo" />
          </div>
          <div class="name">
            <p>Computatrum</p>
          </div>
        </div>
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="beranda.php">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span class="menu-title"> Beranda</span>
              </a>
            </li>
            <li></li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="menu-icon fas fa-address-card"></i>
                <span class="menu-title"> Profil Mahasiswa</span>
              </a>
            </li>
            <li></li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="menu-icon fas fa-swatchbook"></i>
                <span class="menu-title"> Portofolio</span>
              </a>
            </li>
            <li></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#registrasi" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon fas fa-pencil-alt"></i>
                <span class="menu-title"> Registrasi</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#keuangan" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon fas fa-credit-card"></i>
                <span class="menu-title"> Keuangan</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#perkuliahan" aria-expanded="false" aria-controls="auth">
                <i class="fas fa-school menu-icon"></i>
                <span class="menu-title"> Perkuliahan</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ujian" aria-expanded="false" aria-controls="error">
                <i class="fas fa-file-alt menu-icon"></i>
                <span class="menu-title"> Ujian & Nilai</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layanan" aria-expanded="false" aria-controls="error">
                <i class="far fa-handshake menu-icon"></i>
                <span class="menu-title"> Layanan</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#riwayat" aria-expanded="false" aria-controls="error">
                <i class="fas fa-history menu-icon"></i>
                <span class="menu-title"> Riwayat</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#pertanyaan" aria-expanded="false" aria-controls="error">
                <i class="fa fa-question" aria-hidden="true"></i>
                <span class="menu-title"> Pertanyaan</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#download" aria-expanded="false" aria-controls="error">
                <i class="fa fa-download" aria-hidden="true"></i>
                <span class="menu-title"> Download</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="main-section">
        <div class="icon"></div>
        <div class="header">
          <h1>Profil Mahasiswa</h1>
          <h6>Sistem Informasi Akademik Computatrum</h6>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="contain"><img src="https://i.postimg.cc/2yhCnDBy/gambarjaehyun.jpg" alt="pasfoto Mahasiswa"</div>
            <div class="table wrapper">
              <table>
                <tbody>
                  <tr>
                    <th>Nim</th>
                    <td><?php echo $data['nim'] ?></td>
                  </tr>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <td><?php echo $data['nama'] ?></td>
                  </tr>
                  <tr>
                    <th>Jurusan</th>
                    <td><?php echo $data['jurusan'] ?></td>
                  </tr>
                  <tr>
                    <th>Program Studi</th>
                    <td><?php echo $data['program_studi'] ?></td>
                  </tr>
                  <tr>
                    <th>Angkatan</th>
                    <td><?php echo $data['angkatan'] ?></td>
                  </tr>
                  <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $data['jenis_kelamin'] ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


<?php
}
?>