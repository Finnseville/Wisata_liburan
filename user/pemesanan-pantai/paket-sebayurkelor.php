<?php
session_start();
include "../../config/app.php";
$list_destinasi = [];

$stmt = $db->prepare("
    SELECT id_destinasi, nama_destinasi
    FROM destinasi
    ORDER BY nama_destinasi ASC
");

$stmt->execute();
$list_destinasi = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();
$queryDestinasi = $db->query("SELECT id_destinasi, nama_destinasi FROM destinasi ORDER BY nama_destinasi ASC");
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

      <h1 class="fw-bold">Paket Pantai Sebayur dan Pantai kelor</h1>
      <p class="text-muted">
        Ingin menjelajahi pantai sebayur dan pantai kelor? Langsung saja segara<br>
        pesan Paket Pantai Kelor dan Pantai kelor yang kami sediakan!.
      </p>
      
       <h1 class="fw-bold mt-5">Mengapa Paket Sebayur dan Pantai kelor?</h1>
      <p class="text-muted">
        Kedua pantai ini merupakan pantai yang indah, keduanya juga berada di NTT.<br>
        Dengan paket ini anda dapat menikmati 2 Keindahaan pantai ini dalam 2 hari,<br>
        hanya dengan sekali ketukan anda bisa menikmati nya sekarang juga!
      </p>

      <!-- Day 1 -->
      <h1 class="fw-bold mt-5">Itinerary Paket Sebayur dan Pantai kelor</h1>
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
      <h1 class="fw-bold mt-5">Itinerary Paket Sebayur dan Pantai kelor</h1>
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
      <form action="proses_pemesanan.php" method="POST" id="orderForm">

        <!-- DESTINASI -->
        <div class="mb-3">
          <label class="form-label fw-semibold">
            <i class="fas fa-map-marker-alt me-2"></i>Destinasi Wisata
          </label>
          <select name="id_destinasi" class="form-control" required>
            <option value="">Pilih Destinasi</option>
            <?php while ($d = mysqli_fetch_assoc($queryDestinasi)) : ?>
              <option value="<?= $d['id_destinasi']; ?>">
                <?= htmlspecialchars($d['nama_destinasi']); ?>
              </option>
            <?php endwhile; ?>
          </select>
        </div>

        <!-- Paket Wisata -->
        <div class="mb-3">
          <label>Paket Wisata</label>
          <select name="paket_wisata" class="form-control" required>
            <option value="">Paket</option>
            <option value="solo">Solo</option>
            <option value="duo">Duo</option>
            <option value="rombongan">Rombongan</option>
          </select>
        </div>

        <!-- Nama Pelanggan -->
        <div class="mb-3">
          <label class="form-label fw-semibold">
            <i class="fas fa-user me-2"></i>Nama Lengkap
          </label>
          <input type="text" name="nama_pelanggan" class="form-control"
            placeholder="Masukkan nama lengkap" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label class="form-label fw-semibold">
            <i class="fas fa-envelope me-2"></i>Email
          </label>
          <input type="email" name="email" class="form-control"
            placeholder="contoh@email.com" required>
        </div>

        <!-- Telepon -->
        <div class="mb-3">
          <label class="form-label fw-semibold">
            <i class="fas fa-phone me-2"></i>No. Telepon
          </label>
          <input type="tel" name="telepon" class="form-control"
            placeholder="08xxxxxxxxxx" maxlength="15" pattern="[0-9]{10,15}" required>
          <small class="text-muted">Format: 08xxxxxxxxxx</small>
        </div>

        <!-- Jumlah Orang -->
        <div class="mb-3">
          <label class="form-label fw-semibold">
            <i class="fas fa-users me-2"></i>Jumlah Orang
          </label>
          <input type="number" name="jumlah_orang" class="form-control"
            min="1" max="20" value="1" id="jumlah_orang" required>
        </div>

        <!-- Tanggal Berangkat -->
        <div class="mb-3">
          <label class="form-label fw-semibold">
            <i class="far fa-calendar-alt me-2"></i>Tanggal Keberangkatan
          </label>
          <input type="date" name="tanggal_berangkat" class="form-control"
            min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>
          <small class="text-muted">Minimal H+1</small>
        </div>

        <!-- Status -->
        <input type="hidden" name="status" value="menunggu">

        <!-- Total Bayar -->
        <div class="alert alert-info mb-3">
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-semibold">Total Bayar:</span>
            <span class="fw-bold fs-5" id="total_display">Rp 900.000</span>
          </div>
          <input type="hidden" name="total_bayar" id="total_bayar" value="900000">
        </div>

        <!-- Submit -->
        <button type="submit" name="pesan" class="btn btn-danger w-100 fw-semibold" id="btn-bayar">
          <i class="fas fa-shopping-cart me-2"></i>
          Pesan Sekarang
        </button>

      </form>
    </div>
  </div>
</div>

<script>
// Harga default
const hargaPerOrang = 900000;
const inputJumlah = document.getElementById('jumlah_orang');
const totalDisplay = document.getElementById('total_display');
const totalInput = document.getElementById('total_bayar');

inputJumlah.addEventListener('input', function () {
  const jumlah = parseInt(this.value) || 1;
  const total = hargaPerOrang * jumlah;

  totalDisplay.textContent = 'Rp ' + total.toLocaleString('id-ID');
  totalInput.value = total;
});

// Validasi tanggal minimal besok
const inputTanggal = document.querySelector('input[name="tanggal_berangkat"]');
const today = new Date();
today.setDate(today.getDate() + 1);
inputTanggal.min = today.toISOString().split('T')[0];

// Disable button saat submit
document.getElementById('orderForm').addEventListener('submit', function () {
  const btn = document.getElementById('btn-bayar');
  btn.disabled = true;
  btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Memproses...';
});
</script>

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