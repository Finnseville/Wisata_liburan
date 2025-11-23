<?php
include "../config/app.php";
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
            </ul>
        </div>

        <div class="d-flex gap-2">
            <a href="../Login/login.php" class="btn btn-outline-primary">Masuk</a>
            <a href="../Login/daftar.php" class="btn btn-primary">Daftar</a>
        </div>
    </div>
</nav>

<!-- HERO -->
<header id="hero" class="hero d-flex align-items-center text-white">
    <div class="container">
        <span class="badge bg-primary fw-semibold px-3 py-2 mb-2">Web Traveling NTT Terpercaya</span>

        <h1 class="display-4 fw-bold" style="max-width: 500px;">
            Wujudkan <span class="text-primary">Liburan</span><br>
            <span class="text-success">Impian</span> Anda
        </h1>

        <p class="lead mt-3">Booking hotel, pesawat dan wisata lebih cepat & hemat</p>

        <a href="#destinasi" class="btn btn-lg btn-info text-white shadow mt-3">
            Mulai Eksplor
        </a>
    </div>
</header>

<br><br>

<!-- DESTINATIONS -->
<div class="container my-5">
  <h2 class="mb-4 text-center fw-bold">Daftar Paket Wisata</h2>

  <div class="row g-4 justify-content-center">
    
    <?php
    // Ambil data dari database
    $sql = "SELECT * FROM paket ORDER BY id_paket";
    $result = $db->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
    
    <!-- Card Paket Wisata -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 200px;">
          <h5>gambar paket</h5>
        </div>
        <div class="card-body">
          <a href="detail.php" class="card-title"><?php echo $row['nama_paket']; ?></a>
          <p class="text-muted mb-2">Harga: <strong>Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></strong></p>
          <p class="card-text"><?php echo $row['deskripsi']; ?></p>
          <a href="detail.php?id=<?php echo $row['id_paket']; ?>" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>

    <?php
        }
    } else {
        echo "<div class='col-12 text-center'><div class='alert alert-warning'>Belum ada paket wisata tersedia.</div></div>";
    }
    $db->close();
    ?>

  </div>
</div>

<br><br>

<!-- ABOUT US -->
<section id="aboutus" class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">About Us</h2>
        <p class="text-muted">Our values define how we serve travelers worldwide.</p>
    </div>

    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="p-4 shadow-sm rounded">
                <h5 class="fw-bold mt-3">Global Access</h5>
                <p class="text-muted">We provide travel services across the world.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 shadow-sm rounded">
                <h5 class="fw-bold mt-3">Trusted Information</h5>
                <p class="text-muted">All travel info is verified and accurate.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 shadow-sm rounded">
                <h5 class="fw-bold mt-3">User First</h5>
                <p class="text-muted">We prioritize comfort & experience.</p>
            </div>
        </div>
    </div>
</section>

<br><br>

<!-- CONTACT US -->
<section id="kontak" class="container py-5">
    <h2 class="fw-bold mb-3">Contact Us</h2>

    <p class="text-muted" style="max-width:650px;">
        If you have questions or business inquiries, reach us using the info below.
    </p>

    <div class="mt-4">
        <p><strong>Email:</strong> support@natour.com</p>
        <p><strong>Phone:</strong> +62 800-000-000</p>
        <p><strong>Business Hours:</strong> Monday — Friday | 09:00 — 18:00 (GMT+7)</p>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-center py-4 bg-dark text-white">
    <p class="fw-semibold m-0">NATOUR</p>

    <a href="aboutus.html" class="text-white">About Us</a> -
    <a href="kontak.html" class="text-white">Contact Us</a>
    <br>
    <small>© 2025 — All Rights Reserved</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
