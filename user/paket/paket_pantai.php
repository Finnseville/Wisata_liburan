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
        #destinasi {
            scroll-margin-top: 120px;
        }
        #aboutus {
            scroll-margin-top: 150px;
        }
        #kontak {
            scroll-margin-top: 150px;
        }
        #hero {
            scroll-margin-top: 150px;
        }
    </style>
</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 sticky-top">
    <div class="container">

        <a href="awal.php" class="navbar-brand fw-bold text-primary">
            <span class="text-primary">Na</span><span class="text-success">Tour</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navMenu">
            <ul class="navbar-nav gap-3">
    <li class="nav-item"><a class="nav-link fw-semibold" href="#hero">Home</a></li>
    <li class="nav-item"><a class="nav-link fw-semibold" href="#destinasi">Destination</a></li>
    <li class="nav-item"><a class="nav-link fw-semibold" href="#aboutus">About Us</a></li>
    <li class="nav-item"><a class="nav-link fw-semibold" href="#kontak">Contact Us</a></li>

    <!-- MENU DAFTAR PEMESANAN -->
    <li class="nav-item">
        <a class="nav-link fw-semibold text-primary" href="daftar_pemesanan.php">
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
  <div class="card-img-top">
    <div id="carouselPaket" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="../src/paket1/kelor.jpg" class="d-block w-100 carousel-img">
        </div>

        <div class="carousel-item">
          <img src="../src/paket1/paintaipink.jpg" class="d-block w-100 carousel-img">
        </div>

        <div class="carousel-item">
          <img src="../src/paket1/sebayur.jpg" class="d-block w-100 carousel-img">
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

  <!-- STYLE -->
  <style>
    .carousel-img {
      height: 350px;
      object-fit: cover;
      border-radius: 8px;
    }
  </style>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Paket Wisata Pantai</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- DESTINATIONS -->
<div id="destinasi" class="container my-5">
  <h2 class="mb-4 text-center fw-bold">Paket Wisata Pantai</h2>

  <div class="row g-4 justify-content-center">

    <!-- Pantai Kelor -->
    <div class="col-md-4">
      <a href="#" class="text-decoration-none">
        <div class="card border-0 shadow-sm text-white">
          <img 
            src="../src/paket1/kelor.jpg"
            class="card-img"
            alt="Pantai Kelor"
            style="height:230px; object-fit:cover;"
          >
          <div class="card-img-overlay d-flex align-items-end"
               style="background: linear-gradient(to top, rgba(0,0,0,.6), rgba(0,0,0,0));">
            <h5 class="fw-semibold mb-2">Pantai Kelor Dan Pantai Pink</h5>
            <small class="text-warning fw-semibold">
              Rp 750.000 / orang
            </small>
          </div>
        </div>
      </a>
    </div>

    <!-- Pantai Pink -->
    <div class="col-md-4">
      <a href="#" class="text-decoration-none">
        <div class="card border-0 shadow-sm text-white">
          <img 
            src="../src/paket1/paintaipink.jpg"
            class="card-img"
            alt="Pantai Pink"
            style="height:230px; object-fit:cover;"
          >
          <div class="card-img-overlay d-flex align-items-end"
               style="background: linear-gradient(to top, rgba(0,0,0,.6), rgba(0,0,0,0));">
            <h5 class="fw-semibold mb-1">Pantai Pink Dan Pantai Sebayur</h5>
              <small class="text-warning fw-semibold">
              Rp 750.000 / orang
            </small>    
          </div>
        </div>
      </a>
    </div>

    <!-- Pantai Sebayur -->
    <div class="col-md-4">
      <a href="#" class="text-decoration-none">
        <div class="card border-0 shadow-sm text-white">
          <img 
            src="../src/paket1/sebayur.jpg"
            class="card-img"
            alt="Pantai Sebayur"
            style="height:230px; object-fit:cover;"
          >
          <div class="card-img-overlay d-flex align-items-end"
               style="background: linear-gradient(to top, rgba(0,0,0,.6), rgba(0,0,0,0));">
            <h5 class="fw-semibold mb-2">Pantai Sebayur Dan Pantai Kelor</h5>
             <p class="mb-0 small">Rp 350.000 / orang</p>
          </div>
        </div>
      </a>
    </div>

  </div>

  <div class="text-center mt-4">
    <a href="awal.php" class="btn btn-secondary">⬅ Kembali</a>
  </div>

</div>

</body>
</html>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
