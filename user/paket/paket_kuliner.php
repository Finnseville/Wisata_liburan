<?php
session_start();
include "../../config/app.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata Kuliner</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
    font-family: "Poppins", sans-serif;
}

#car {
    scroll-margin-top: 120px;
}

.carousel-img {
    height: 350px;
    object-fit: cover;
    border-radius: 8px;
}
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

    </style>
</head>

<body class="bg-light">

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 sticky-top">
    <div class="container">

        <a href="../awal.php" class="navbar-brand fw-bold">
            <span class="text-primary">Na</span><span class="text-success">Tour</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navMenu">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="../awal.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="paket_pantai.php">Pantai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="paket_menjelajah.php">Menjelajah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold text-primary" href="#car">Kuliner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="../daftar_pemesanan.php">Daftar Pemesanan</a>
                </li>
            </ul>
        </div>

        <div class="d-flex gap-2">
            <?php if (isset($_SESSION['username'])) { ?>
                <span class="me-3">Halo, <b><?= $_SESSION['username']; ?></b></span>
                <a href="../Login/logout.php" class="btn btn-danger btn-sm">Logout</a>
            <?php } else { ?>
                <a href="../Login/login.php" class="btn btn-outline-primary btn-sm">Masuk</a>
                <a href="../Login/daftar.php" class="btn btn-primary btn-sm">Daftar</a>
            <?php } ?>
        </div>

    </div>
</nav>

<!-- ================= CAROUSEL ================= -->
<div id="car"class="carousel-wrapper my-4">
    <div id="carouselPaket" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner rounded-4 overflow-hidden">

            <div class="carousel-item active">
                <img src="../src/paket3/jagung_bose.jpg" class="d-block w-100 carousel-img">
            </div>

            <div class="carousel-item">
                <img src="../src/paket3/sambal luat.jpg" class="d-block w-100 carousel-img">
            </div>

            <div class="carousel-item">
                <img src="../src/paket3/sei sapi.jpg" class="d-block w-100 carousel-img">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPaket" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselPaket" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<!-- ================= DESTINATIONS ================= -->
<div class="container my-5">
    <h2 class="mb-4 text-center fw-bold">Paket Wisata Kuliner</h2>

    <div class="row g-4 justify-content-center">

        <div class="col-md-4">
            <a href="../content/paket_201.php" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    <div class="position-relative">
                        <img src="../src/paket3/jagung_bose.jpg" class="w-100" style="height:260px; object-fit:cover;">

                        <span class="position-absolute bottom-0 start-0 m-3 px-3 py-2 rounded-3 fw-semibold text-white"
                              style="background-color:#ff6b6b;">
                            Rp. 900.000
                        </span>
                    </div>

                    <div class="card-body">
                        <h5 class="fw-bold mb-0 text-center">
                            Paket Tour Menjelajah Kuliner NTT
                        </h5>
                    </div>

                </div>
            </a>
        </div>

    </div>
</div>

<!-- ================= SCRIPT ================= -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<footer id="kontak" class="text-white pt-5" style="background-color: #0d1b2a;">
  <div class="container">

    <div class="row gy-4">

      <!-- Tentang Kami -->
      <div class="col-md-6 col-lg-4">
        <h5 class="fw-bold mb-3">Kenapa Memilih Kami</h5>
        <p class="text-secondary">
          Natour kami hadir sebagai sahabat bagi anda
          untuk liburan ke NTT.
        </p>
        <p class="text-secondary">
          Berbekal pengalaman profesional bertahun-tahun di dunia wisata,
          khususnya di Daerah NTT.
        </p>
      </div>

      <!-- Kontak Kami -->
      <div class="col-md-6 col-lg-4">
        <h5 class="fw-bold mb-3">Kontak Kami</h5>
        <p class="mb-2">📞 08xx-xxxx-xxxx</p>
        <p class="mb-2">✉️ natour@gmail.com</p>
        <p class="mb-0">⏰ Senin – Minggu 24 Jam Online</p>
      </div>

    </div>

    <hr class="border-light my-4">

    <!-- Copyright -->
    <div class="text-center text-secondary pb-3">
      © 2026 Natour — All Rights Reserved
    </div>

  </div>
</footer>
