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

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="col-md-4">
      <div class="card shadow-sm sticky-top" style="top:20px;">
        <div class="card-body">

          <h5 class="fw-bold mb-3">Form Pemesanan</h5>

          <form action="" method="POST">
            <input type="hidden" name="id_paket" value="<?= $id_paket; ?>">

            <div class="mb-3">
              <label>Paket Wisata</label>
              <input type="text" class="form-control" value="<?= htmlspecialchars($paket['nama_paket'], ENT_QUOTES); ?>" disabled>
              
            </div>

            <div class="mb-3">
              <label>Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>No Telepon</label>
              <input type="tel" name="nohp" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Jumlah Orang</label>
              <input type="number" name="jumlah_org" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Tanggal Keberangkatan</label>
              <input type="date" name="tglbrkt" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Durasi</label>
              <input type="text" class="form-control" value="<?= htmlspecialchars($paket['durasi'], ENT_QUOTES); ?>" disabled>
  <input type="hidden" name="paket_wisata" value="<?= htmlspecialchars($paket['durasi'], ENT_QUOTES); ?>">
            </div>
            <div class="alert alert-info">
              <strong>Harga Paket:</strong><br>
              <span class="h5">Rp <?= number_format($paket['harga'],0,',','.'); ?></span>
            </div>

            <button class="btn btn-primary w-100 btn-lg" name="tambah" value="tambah" type="submit">PESAN SEKARANG</button>
          </form>

        </div>
      </div>
    </div>

  </div>
</div>


</body>
</html>

<?php $db->close(); ?>
