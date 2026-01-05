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
    <li class="nav-item"><a class="nav-link fw-semibold" href="../paket/paket_pantai.php">Pantai</a></li>
    <li class="nav-item"><a class="nav-link fw-semibold" href="../paket/paket_menjelajah.php">Menjelajah</a></li>
    <li class="nav-item"><a class="nav-link fw-semibold" href="../paket/paket_kuliner.php">Kuliner</a></li>

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

<!-- ================== CAROUSEL ================== UNUSED HERE FOR ALL PAKET/PACKAGE DETAILS!!! --> 
  <div id="car" class="card-img-top">
    <div id="carouselPaket" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="../src/paket2/komodo.jpg" class="d-block w-100 carousel-img"> <!-- CHANGE THIS ACCORDING TO FIGMA (self note lololol) -->
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

      <h1 class="fw-bold">Paket Sebayur Komodo</h1>
      <p class="text-muted">
        Ingin menjelajahi Pulau komodo dan pulau Sebayur? Langsung saja segara <br>
        pesan Paket Komodo yang kami sediakan!.
      </p>
      
       <h1 class="fw-bold mt-5">Mengapa Paket Komodo?</h1>
      <p class="text-muted">
        Paket ini memungkinkan anda menjelajahi 2 pulau dalam 2 hari, Pulau Sebayur <br>
        dan pulau Komodo, Trekking dan melihat komodo dengan paket ini.<br>
        hanya dengan sekali ketukan anda bisa menikmati nya sekarang juga!
      </p>

      <!-- Day 1 -->
      <h1 class="fw-bold mt-5">Itinerary Paket Sebayur Komodo</h1>
      <h2 class="fw-bold mt-2">Day 1 - Night 1, Pulau Komodo</h2>
      <ul>
        <li>Penjemputan di hotel Labuan Bajo oleh tim pengantar NaTour.</li>
        <li>Berangkat ke Pulau Komodo (Perkiraan 2-3 Jam)</li>
        <li>Makan siang di Restoran Lokal</li>
        <li>Aktivitas Day - 1 Pulau Komodo :</li>
          <ul>
            <li>Explorasi Pulau Komodo</li>
            <li>Photo Hunting dan menikmati pemandangan</li>
          </ul>
        <li>Check-in di guest house, makan malam, dan aktivitas Bebas</li>
      </ul>

      <img src="../src/paket2/komodo.jpg"
           class="img-fluid rounded-3 shadow-sm my-3"
           alt="modoo">

      <!-- Day 2 -->
      <h1 class="fw-bold mt-5">Itinerary Paket Sebayur Komodo</h1>
      <h2 class="fw-bold mt-2">Day 2 - Night 2, Pulau Sebayur</h2>
      <ul>
        <li>Penjemputan di Guest-House Pulau Komodo oleh tim pengantar NaTour.</li>
        <li>Berangkat ke Pulau Sebayur (Perkiraan 1-2 Jam)</li>
        <li>Makan siang di Restoran Lokal</li>
        <li>Aktivitas Day - 2 Pulau Sebayur :</li>
          <ul>
            <li>Explorasi Pulau Sebayur</li>
            <li>Photo Hunting dan menikmati pemandangan</li>
          </ul>
        <li>Setelah selesai aktivitas, maka pengunjung akan kembali ke Hotel Labuan Bajo</li>
        <li>Check-in di Hotel Labuan bajo. makan malam, dan aktivitas bebas</li>
        <li>Pada besoknya akan dilakukan Check-in terakhir untuk Konfirmasi</li>
        <li>Setelah Konfirmasi, Tour Berakhir</li>
      </ul>

      <img src="../src/paket2/pulau-komodo.jpg"
           class="img-fluid rounded-3 shadow-sm my-3"
           alt="ricaa">

      <!-- Notes -->
      <div class="alert alert-warning rounded-4 mt-4">
        <h6 class="fw-bold">Catatan Penting</h6>
        <ul class="mb-0">
          <li>Gunakan Sepatu Trekking</li>
          <li>Patuhi Intruksi Ranger!</li>
          <li>Perubahan Cuaca yang ekstrem dapat mengubah jadwal</li>
        </ul>
      </div>

    </div>

<!-- RIGHT SIDEBAR -->
<div class="col-lg-4">

  <div class="card border-0 shadow-sm rounded-4 sticky-top" style="top:100px;">

    <!-- PRICE BAR -->
    <div class="bg-dark text-white text-center py-3 rounded-top-4">
      <h4 class="fw-bold mb-0">
        Rp. 900.000 <small class="fw-normal fs-6">/ orang</small>
      </h4>
    </div>

    <div class="card-body">

      <form>

        <div class="mb-3">
          <label class="form-label fw-semibold">Nama Lengkap</label>
          <input
            type="text"
            class="form-control"
            placeholder="Masukkan nama lengkap"
            required
          >
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Email</label>
          <input
            type="email"
            class="form-control"
            placeholder="Masukkan email"
            required
          >
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">No. Telepon</label>
          <input
          type="tel"
          class="form-control"
          placeholder="Masukkan nomor telepon"
          maxlength="12"
          pattern="[0-9]{1,12}"
          inputmode="numeric"
          required
          >
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Jumlah Orang</label>
          <input
            type="number"
            class="form-control"
            placeholder="Jumlah orang"
            min="1"
            value="1"
            required
          >
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Tanggal Keberangkatan</label>
          <input
            type="date"
            class="form-control"
            required
          >
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