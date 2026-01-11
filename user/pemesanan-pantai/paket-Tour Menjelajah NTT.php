<?php
session_start();
include "../../config/app.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paket Sebayur Komodo</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Modal CSS -->
  <link rel="stylesheet" href="../content/metodebayar.css">

  <style>
    body { font-family: "Poppins", sans-serif; }
    .carousel-img {
      height: 350px;
      object-fit: cover;
      border-radius: 8px;
    }
    #car { scroll-margin-top: 120px; }
  </style>
</head>

<body class="bg-light">

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 sticky-top">
  <div class="container">
    <a href="../awal.php" class="navbar-brand fw-bold">
      <span class="text-primary">Na</span><span class="text-success">Tour</span>
    </a>

    <div class="collapse navbar-collapse justify-content-center">
      <ul class="navbar-nav gap-3">
        <li class="nav-item"><a class="nav-link fw-semibold" href="../awal.php">Home</a></li>
        <li class="nav-item"><a class="nav-link fw-semibold" href="../paket/paket_pantai.php">Pantai</a></li>
        <li class="nav-item"><a class="nav-link fw-semibold" href="../paket/paket_menjelajah.php">Menjelajah</a></li>
        <li class="nav-item"><a class="nav-link fw-semibold" href="../paket/paket_kuliner.php">Kuliner</a></li>
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

<!-- ================= CAROUSEL ================= -->
<div id="car" class="card-img-top">
  <div id="carouselPaket" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../src/paket1/paintaipink.jpg" class="d-block w-100 carousel-img">
      </div>
      <div class="carousel-item">
        <img src="../src/paket1/kelor.jpg" class="d-block w-100 carousel-img">
      </div>
      <div class="carousel-item">
        <img src="../src/paket1/sebayur.jpg" class="d-block w-100 carousel-img">
      </div>
        <div class="carousel-item">
        <img src="../src/paket1/pantai.jpg" class="d-block w-100 carousel-img">
      </div>
    </div>
  </div>
</div>

<!-- ================= CONTENT ================= -->
<div class="container my-5">
  <div class="row g-4">

<!-- LEFT CONTENT -->
    <div class="col-lg-8">

      <h1 class="fw-bold">Paket Tour Pantai NTT</h1>
      <p class="text-muted">
        Ingin menjelajahi Tour Pantai NTT? Langsung saja segara<br>
        pesan Paket Tour Pantai NTT yang kami sediakan!.
      </p>

       <h1 class="fw-bold mt-5">Mengapa Paket Tour Pantai NTT?</h1>
      <p class="text-muted">
        Kedua pantai ini merupakan pantai yang indah, keduanya juga berada di NTT.<br>
        Dengan paket ini anda dapat menikmati 2 Keindahaan pantai ini dalam 2 hari,<br>
        hanya dengan sekali ketukan anda bisa menikmati nya sekarang juga!
      </p>

      <!-- Day 1 -->
      <h1 class="fw-bold mt-5">Itinerary Paket Tour Pantai NTT</h1>
      <h2 class="fw-bold mt-2">Day 1 - Night 1, Pantai Sebayur</h2>
      <ul>
        <li>Penjemputan di hotel Labuan Bajo oleh tim pengantar NaTour.</li>
        <li>Berangkat ke Pantai Sebayur (Perkiraan 2-3 Jam)</li>
        <li>Makan siang di Restoran Lokal</li>
        <li>Aktivitas Day - 1 Pantai Sebayur :</li>
          <ul>
            <li>Explorasi Pantai Sebayur</li>
            <li>Menikmati Sunset di Pantai Sebayur</li>
          </ul>
        <li>Check-in di guest house, makan malam, dan aktivitas Bebas</li>
      </ul>

      <img src="../src/paket1/sebayur.jpg"
           class="img-fluid rounded-3 shadow-sm my-3"
           alt="modoo">

      <!-- Day 2 -->
      <h1 class="fw-bold mt-5">Itinerary Paket Tour Pantai NTT</h1>
      <h2 class="fw-bold mt-2">Day 2 - Night 2, Pantai kelor</h2>
      <ul>
        <li>Penjemputan di Guest-House Pantai Sebayur oleh tim pengantar NaTour.</li>
        <li>Berangkat ke Pantai kelor (Perkiraan 1-2 Jam)</li>
        <li>Makan siang di Restoran Lokal</li>
        <li>Aktivitas Day - 2 Pantai kelor :</li>
          <ul>
            <li>Explorasi Pantai kelor</li>
            <li>Menikmati Sunset di Pantai kelor</li>
          </ul>
        <li>Check-in di Hotel Labuan bajo. makan malam, dan aktivitas bebas</li>
        <img src="../src/paket1/kelor.jpg"
           class="img-fluid rounded-3 shadow-sm my-3"
           alt="modoo">

      <!--- Day 3 -->
      <h1 class="fw-bold mt-5">Itinerary Paket Sebayur dan Pantai Pink</h1>
      <h2 class="fw-bold mt-2">Day 3 - Night 3, Pantai Pink</h2>
      <ul>
        <li>Penjemputan di Guest-House Pantai Sebayur oleh tim pengantar NaTour.</li>
        <li>Berangkat ke Pantai Pink (Perkiraan 1-2 Jam)</li>
        <li>Makan siang di Restoran Lokal</li>
        <li>Aktivitas Day - 2 Pantai Pink :</li>
          <ul>
            <li>Explorasi Pantai Pink</li>
            <li>Menikmati Sunset di Pantai Pink</li>
          </ul>
        <li>Setelah selesai aktivitas, maka pengunjung akan kembali ke Hotel Labuan Bajo</li>
        <li>Check-in di Hotel Labuan bajo. makan malam, dan aktivitas bebas</li>
        <li>Pada besoknya akan dilakukan Check-in terakhir untuk Konfirmasi</li>
        <li>Setelah Konfirmasi, Tour Berakhir</li>
      </ul>

      <img src="../src/paket1/kelor.jpg"
           class="img-fluid rounded-3 shadow-sm my-3"
           alt="ricaa">

      <!-- NOTES -->
      <div class="alert alert-warning rounded-4 mt-4">
        <h6 class="fw-bold">Catatan Penting</h6>
        <ul class="mb-0">
          <li>Gunakan SunScreen</li>
          <li>Membawa Dry-Bag dan baju ganti</li>
          <li>Pergantian Cuaca yang ekstrem dapat mengubah jadwal</li>
        </ul>
      </div>

    </div>

    <!-- RIGHT SIDEBAR -->
    <div class="col-lg-4">
      <div class="card shadow-sm rounded-4 sticky-top" style="top:100px;">
        <div class="bg-dark text-white text-center py-3 rounded-top-4">
          <h4 class="fw-bold mb-0">
            Rp. 900.000 <small class="fw-normal fs-6">/ orang</small>
          </h4>
        </div>

        <div class="card-body">
          <form id="orderForm">

            <div class="mb-3">
              <label class="form-label fw-semibold">Nama Lengkap</label>
              <input type="text" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Email</label>
              <input type="email" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">No. Telepon</label>
              <input type="tel" class="form-control" maxlength="12" pattern="[0-9]{1,12}" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Jumlah Orang</label>
              <input type="number" class="form-control" min="1" value="1" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Tanggal Keberangkatan</label>
              <input type="date" class="form-control" required>
            </div>

            <button type="button" class="btn btn-danger w-100 fw-semibold" id="btn-bayar">
              Pesan Sekarang
            </button>

          </form>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- PAYMENT MODAL -->
<?php include "../content/metodebayar.html"; ?>

<!-- MicroModal -->
<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

<script>
  MicroModal.init({
    closeOnOverlayClick: true,
    disableScroll: true
  });
</script>

<script src="../content/redirect.js"></script>

</body>
</html>