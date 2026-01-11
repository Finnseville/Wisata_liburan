<?php
include "../config/app.php";

if (isset($_POST['tambah'])){
    if (create_pesanan($_POST) > 0){
        echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'awal.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan');
                document.location.href = 'detail.php';
              </script>";
    }
}
?>
<?php
// ===== VALIDASI ID =====
$id_paket = $_GET['id'] ?? null;
if(!$id_paket) {
    die("Error: ID paket tidak ditemukan. <a href='home.php'>Kembali ke Home</a>");
}
$id_paket = intval($id_paket);

// ===== QUERY DATA PAKET =====
$paket = $db->query("SELECT * FROM paket WHERE id_paket = $id_paket")->fetch_assoc();
if(!$paket) {
    die("Error: Paket wisata tidak ditemukan. <a href='home.php'>Kembali ke Home</a>");
}
// ===== MAP PROVINSI =====
$wisata_map = [
    101 => 'pantai',
    102 => 'pulau',
    103 => 'kuliner',
];

$wisata = $wisata_map[$id_paket] ?? null;


$list_destinasi = [];
if($wisata) {
 $stmt = $db->prepare("
    SELECT d.* 
    FROM destinasi d
    JOIN paket_destinasi pd 
        ON d.id_destinasi = pd.id_destinasi
    WHERE pd.id_paket = ?
    ORDER BY d.nama_destinasi
");
$stmt->bind_param("i", $id_paket);
    $stmt->execute();
    $list_destinasi = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <title>Detail - <?= $paket['nama_paket']; ?></title>
</head>
<body>

<nav class="navbar navbar-light bg-light px-3">
    <a class="navbar-brand" href="home.php">NATOUR</a>
    <a href="awal.php" class="btn btn-success btn-sm">Kembali</a>
</nav>

<div class="container my-4">
  <div class="row">

    <!-- ===== KONTEN PAKET ===== -->
    <div class="col-md-8">
      <?php
        $content_file = "content/paket_$id_paket.php";
        if(file_exists($content_file)) {
            include $content_file;
        } else {
            echo "<div class='alert alert-warning'>Konten detail belum tersedia.</div>";
        }
      ?>
    </div>

    <!-- ===== FORM PEMESANAN ===== -->
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

        <!-- Status (hidden, default: menunggu) -->
        <input type="hidden" name="status" value="menunggu">

        <!-- Total Bayar (auto calculate) -->
        <div class="alert alert-info mb-3">
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-semibold">Total Bayar:</span>
            <span class="fw-bold fs-5" id="total_display">Rp 900.000</span>
          </div>
          <input type="hidden" name="total_bayar" id="total_bayar" value="900000">
        </div>

        <!-- Submit Button -->
        <button type="submit" name="pesan" class="btn btn-danger w-100 fw-semibold" id="btn-bayar">
          <i class="fas fa-shopping-cart me-2"></i>
          Pesan Sekarang
        </button>

      </form>
    </div>
  </div>
</div>

<script>
// Auto calculate total bayar
const hargaPerOrang = 900000;
const inputJumlah = document.getElementById('jumlah_orang');
const totalDisplay = document.getElementById('total_display');
const totalInput = document.getElementById('total_bayar');

inputJumlah.addEventListener('input', function() {
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

// Form validation
document.getElementById('orderForm').addEventListener('submit', function(e) {
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

<?php $db->close(); ?>
