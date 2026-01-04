<?php
session_start();
include "../../config/app.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Website</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        /* HERO */
        .hero {
            height: 550px;
            background: linear-gradient( rgba(0,0,0,0.6), rgba(0,0,0,0.6) ),
                url("src/bajo.jpeg") center/cover no-repeat;
        }

        /* navbar scroll margin */
        #car {
            scroll-margin-top: 120px;
        }
    </style>
</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 sticky-top">
    <div class="container">

        <a href="../awal.php" class="navbar-brand fw-bold text-primary">
            <span class="text-primary">Na</span><span class="text-success">Tour</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navMenu">
            <ul class="navbar-nav gap-3">
    <li class="nav-item"><a class="nav-link fw-semibold" href="../awal.php">Home</a></li>
    <li class="nav-item"><a class="nav-link fw-semibold" href="paket_pantai.php">Pantai</a></li>
    <li class="nav-item"><a class="nav-link fw-semibold" href="#car">Menjelajah</a></li>
    <li class="nav-item"><a class="nav-link fw-semibold" href="paket_kuliner.php">Kuliner</a></li>

    <!-- MENU DAFTAR PEMESANAN -->
    <li class="nav-item">
        <a class="nav-link fw-semibold text-primary" href="../daftar_pemesanan.php">
            Daftar Pemesanan
        </a>
    </li>
</ul>

        </div>

        <div class="d-flex gap-2">
            <?php if (isset($_SESSION['username'])) { ?>
                <span class="me-3">Halo, <b><?= $_SESSION['username'] ?></b></span>
                <a href="../Login/logout.php" class="btn btn-danger">Logout</a>
            <?php } else { ?>
                <a href="../Login/login.php" class="btn btn-outline-primary">Masuk</a>
                <a href="../Login/daftar.php" class="btn btn-primary">Daftar</a>
            <?php } ?>
        </div>

    </div>
</nav>

<!-- ================== CAROUSEL ================== -->
  <div id="car" class="card-img-top">
    <div id="carouselPaket" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="../src/paket2/komodo.jpg" class="d-block w-100 carousel-img">
        </div>

        <div class="carousel-item">
          <img src="../src/paket2/pulau-komodo.jpg" class="d-block w-100 carousel-img">
        </div>

        <div class="carousel-item">
          <img src="../src/paket2/pulau-sebayur.jpg" class="d-block w-100 carousel-img">
        </div>

      </div>

      <!-- Tombol Prev -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselPaket" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>

      <!-- Tombol Next -->
      <button class="carousel-control-next" type="button" data-bs-target="#carouselPaket" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
  </div>


<!-- ================== PAKET DETAIL ================== -->
<div class="container my-5">
  <div class="row g-4">

    <!-- LEFT CONTENT -->
    <div class="col-lg-8">

      <h2 class="fw-bold mb-3">Paket Tour Menjelajah Kuliner NTT</h2>
      <p class="text-muted">
        Nikmati pengalaman wisata kuliner khas Nusa Tenggara Timur dengan cita rasa autentik
        dan suasana lokal yang tak terlupakan.
      </p>

      <!-- Day 1 -->
      <h5 class="fw-bold mt-4">Itinerary Day 1 - Jagung Bose</h5>
      <ul>
        <li>Penjemputan peserta</li>
        <li>Mencicipi Jagung Bose khas NTT</li>
        <li>Wisata kuliner lokal</li>
      </ul>

      <img src="../src/paket3/jagung_bose.jpg"
           class="img-fluid rounded-4 shadow-sm my-3"
           alt="Jagung Bose">

      <!-- Day 2 -->
      <h5 class="fw-bold mt-4">Itinerary Day 2 - Sambal Luat & Sei Sapi</h5>
      <ul>
        <li>Wisata pasar tradisional</li>
        <li>Mencicipi Sambal Luat</li>
        <li>Makan Siang Sei Sapi</li>
      </ul>

      <img src="../src/paket3/sei sapi.jpg"
           class="img-fluid rounded-4 shadow-sm my-3"
           alt="Sei Sapi">

      <!-- Notes -->
      <div class="alert alert-warning rounded-4 mt-4">
        <h6 class="fw-bold">Catatan Penting</h6>
        <ul class="mb-0">
          <li>Harga dapat berubah sewaktu-waktu</li>
          <li>Minimal 2 peserta</li>
        </ul>
      </div>

    </div>

    <!-- RIGHT SIDEBAR -->
    <div class="col-lg-4">

      <div class="card border-0 shadow-sm rounded-4 sticky-top" style="top:100px;">
        <div class="card-body">

          <h4 class="fw-bold text-danger mb-3">
            Rp. 900.000 <small class="text-muted fs-6">/ orang</small>
          </h4>

          <form>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Nama Lengkap">
            </div>

            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email">
            </div>

            <div class="mb-3">
              <input type="number" class="form-control" placeholder="No. Telepon">
            </div>

            <div class="mb-3">
              <input type="date" class="form-control">
            </div>

            <button class="btn btn-danger w-100 fw-semibold">
              Pesan Sekarang
            </button>
          </form>

        </div>
      </div>

    </div>

  </div>
</div>


<style>
    .carousel-img {
      height: 350px;
      object-fit: cover;
      border-radius: 8px;
    }

</style>

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