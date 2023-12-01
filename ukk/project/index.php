<?php

include "koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <title>web perpustakaan</title>
</head>

<body>
  <div class="sidebar" id="home">
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
        <a href="pinjam-buku.php">
          <i class='bx bx-book-bookmark'></i>
          <span class="links_name">Daftar pinjam</span>
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
  <!-- CONTAINER CONTENT -->
  <div class="container">
    <div class="header">
      <div class="nav">
        <a class="on" href="">Libray</a>
        <a href="profile.php">Profile</a>
        <a href="tambah-data-pinjam.php">Pinjam buku</a>
      </div>
      <div class="cari">
        <input class="search" type="search" name="search" placeholder="search">
      </div>
    </div>

    <?php
    $query = "SELECT * FROM produk_buku";
    $result = mysqli_query($koneksi, $query);

    while ($row = mysqli_fetch_array($result)) { ?>
      <div class="col-md-4">
        <form method="get" action="index.php?id=<?= $row['id'] ?>">

        <div class="produk-buku"></div>
        <img src="img/<?= $row['image'] ?>" style='height: 150px'>
        <div class="text-buku">
          <h2><?= $row['judul']; ?></h2>
          <p><?= $row['penulis']; ?></p>

          <div class="tag">
            <p><?= $row['kategori']; ?></p>
          </div>
        </div>
  
        </form>
      </div>


    <?php }

    ?>

    <section class="book">
      <div class="produk-buku">
        <div class="gambar-buku">
          <img src="/img/e348831994111b27cd102cbcbbe5230d 1.png" alt="">
        </div>
        <div class="text-buku">
          <span>Native invisibilty</span>
          <i class='bx bx-like'></i>
          <div class="info">
            <div>
              <p>denial</p>
            </div>
            <div class="tag">
              <p>fiction</p>
            </div>
          </div>
        </div>
      </div>

      <div class="produk-buku">
        <div class="gambar-buku">
          <img src="/img/e348831994111b27cd102cbcbbe5230d 1.png" alt="">
        </div>
        <div class="text-buku">
          <span>Native invisibilty</span>
          <i class='bx bx-like'></i>
          <div class="info">
            <div>
              <p>denial</p>
            </div>
            <div class="tag">
              <p>fiction</p>
            </div>
          </div>
        </div>
      </div>

      <div class="produk-buku">
        <div class="gambar-buku">
          <img src="/img/e348831994111b27cd102cbcbbe5230d 1.png" alt="">
        </div>
        <div class="text-buku">
          <span>Native invisibilty</span>
          <i class='bx bx-like'></i>
          <div class="info">
            <div>
              <p>denial</p>
            </div>
            <div class="tag">
              <p>fiction</p>
            </div>
          </div>
        </div>
      </div>

      <div class="produk-buku">
        <div class="gambar-buku">
          <img src="/img/e348831994111b27cd102cbcbbe5230d 1.png" alt="">
        </div>
        <div class="text-buku">
          <span>Native invisibilty</span>
          <i class='bx bx-like'></i>
          <div class="info">
            <div>
              <p>denial</p>
            </div>
            <div class="tag">
              <p>fiction</p>
            </div>
          </div>
        </div>
      </div>

      <div class="produk-buku">
        <div class="gambar-buku">
          <img src="/img/e348831994111b27cd102cbcbbe5230d 1.png" alt="">
        </div>
        <div class="text-buku">
          <span>Native invisibilty</span>
          <i class='bx bx-like'></i>
          <div class="info">
            <div>
              <p>denial</p>
            </div>
            <div class="tag">
              <p>fiction</p>
            </div>
          </div>
        </div>
      </div>

      <div class="produk-buku">
        <div class="gambar-buku">
          <img src="img/e348831994111b27cd102cbcbbe5230d 1.png" alt="">
        </div>
        <div class="text-buku">
          <span>Native invisibilty</span>
          <i class='bx bx-like'></i>
          <div class="info">
            <div>
              <p>denial</p>
            </div>
            <div class="tag">
              <p>fiction</p>
            </div>
          </div>
        </div>
      </div>


    </section>


  </div>


  <script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = () => {
      sidebar.classList.toggle('active');
    }
  </script>
</body>

</html>