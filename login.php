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
        <form action="cek_login.php" class="table" method = "post">
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