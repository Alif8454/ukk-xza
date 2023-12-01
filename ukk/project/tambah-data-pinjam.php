<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style1.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <title>web perpustakaan</title>
</head>

<body>
  <div class="sidebar">
    <div class="logo_content">
      <div class="logo">
        <i class='bx bxs-book-reader'></i>
        <div class="logo_name">Library SMKN6</div>
      </div>
      <i class='bx bx-menu' id="btn"></i>
    </div>

    <ul class="nav-list">
      <li>
        <a href="#">
          <i class='bx bx-home-alt-2'></i>
          <span class="links_name">Home</span>
        </a>
        <span class="tooltip">Home<span>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="links_name">Profile</span>
        </a>
        <span class="tooltip">Profile<span>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-book-bookmark'></i>
          <span class="links_name">Daftar pinjam</span </a>
          <span class="tooltip">Daftar pinjam<span>
      </li>

      <li class="exit">
        <a href="#">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log-out</span>
        </a>
        <span class="tooltip">Log-out<span>
      </li>
    </ul>
  </div>

  <div class="container">
    <div class="header">
      <div class="nav">
        <a class="on" href="">Libray</a>
        <a href="">Profile</a>
        <a href="#pinjam-buku">Pinjam buku</a>
      </div>
      <div class="cari">
        <input class="search" type="search" name="search" placeholder="search">
      </div>
    </div>

  <section class="tabel">
  <?php
include "koneksi.php";

if(isset($_POST['kirim'])) {
  mysqli_query($koneksi,"INSERT INTO tabelbuku set
  nama = '$_POST[nama]',
  kelas = '$_POST[kelas]',
  judul = '$_POST[judul]',
  tanggal = '$_POST[tanggal]'");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
  <title>Galh</title>
</head>
<body>
  <!-- nav -->
  <nav>
    <div class="logo">
      <div class="gambar">
        <img src="aset/1.png" alt="">
      </div>
      <div class="tulisan">
        <h1>SMK Negeri 6 Jakarta</h1>
      </div>
    </div>
  <div class="content-isi-data">
      <div class="tex">
      <form method="POST">
        <h2>Isi Data Ini</h2>
        <div class="yaho">
          <P>Nama</P>
          <input type="text" name="nama" placeholder="Nama">
        </div>
        <div class="yaho">
          <P>Kelas</P>
          <input type="text" name="kelas" placeholder="Kelas">
        </div>
        <div class="yaho">
          <p>Judul Buku</p>
          <input type="text" name="judul" placeholder="Judul Buku">
        </div>
        <div class="yaho">
          <p>Tanggal Meminjam</p>
          <input type="date" name="tanggal"><br>
        </div>
        <div class="po">
          <input type="submit" name="kirim" placeholder="Submit">
        </div>
      </form>
    </div>
  </div>

   <!-- footer -->
   <footer>
      <div class="logoh">
        <div class="fufu">
          <h4>© Copyright 2023. SMKN 6 Jakarta</h4>
        </div>
        <div class="apa">
          <a href=""><img src="aset/5 (1).png" alt=""></a>
          <a href=""><img src="aset/5 (2).png" alt=""></a>
          <a href=""><img src="aset/5 (3).png" alt=""></a>
        </div>
      </div>
    </footer>
  </body>
  </html>

  <script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = () => {
      sidebar.classList.toggle('active');
    }
  </script>
</body>
</html>