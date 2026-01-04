<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../Login/login.php");
    exit;
    
}
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
<div id="destinasi" class="container my-5">
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
    
<?php
$gambar = "src/no-image.jpg";

if ($row['id_paket'] == 101) {
    $gambar = "src/paket1/kelor.jpg";
} elseif ($row['id_paket'] == 102) {
    $gambar = "src/paket2/komodo.jpg";
} elseif ($row['id_paket'] == 103) {
    $gambar = "src/paket3/jagung_bose.jpg";
}
?>
<img src="<?= $gambar ?>" class="card-img-top" style="height: 200px; object-fit: cover;">


    <div class="card-body">
      <a href="detail.php?id=<?php echo $row['id_paket']; ?>" class="card-title">
        <?php echo $row['nama_paket']; ?>
      </a>

      <p class="text-muted mb-2">
        Harga: <strong>Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></strong>
      </p>

      <p class="card-text"><?php echo $row['deskripsi']; ?></p>

      <a href="detail.php?id=<?php echo $row['id_paket']; ?>" class="btn btn-primary">
        Lihat Detail
      </a>
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

<footer class="text-white pt-5" style="background-color: #0d1b2a;">
  <div class="container">

    <div class="row gy-4">

      <!-- Tentang Kami -->
      <div class="col-md-6 col-lg-4">
        <h5 class="fw-bold mb-3">Tentang Kami</h5>
        <p class="text-secondary">
          Natour kami hadir sebagai sahabat bagi anda
          untuk liburan ke NTT.
        </p>
        <p class="text-secondary">
          Berbekal pengalaman profesional bertahun-tahun di dunia wisata,
          khususnya Paket Pantai dan Menjelajah pulau.
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
      © 2025 Natour — All Rights Reserved
    </div>

  </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
