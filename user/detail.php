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
    $stmt = $db->prepare("SELECT * FROM destinasi WHERE paket = ? ORDER BY nama_destinasi");
    $stmt->bind_param("s", $wisata);
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

             <?php if(!empty($list_destinasi)): ?>
            <div class="mb-3">
              <label class="fw-bold">Pilih Destinasi</label>
              <small class="text-muted d-block mb-1">* Minimal 0, maksimal 3</small>

              <?php foreach($list_destinasi as $g): ?>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="destinasi[]" 
                       value="<?= $g['nama_destinasi']; ?>" id="destinasi<?= $g['id_destinasi']; ?>">
                <label class="form-check-label" for="destinasi<?= $g['id_destinasi']; ?>">
                  <?= $g['nama_destinasi']; ?>
                </label>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <div class="mb-3">
              <label>Tanggal Keberangkatan</label>
              <input type="date" name="tglbrkt" class="form-control" required>
            </div>

           <div class="mb-3">
              <label>Tanggal Kepulangan</label>
              <small class="text-muted d-block mb-1">* Minimal 3 Hari dari tanggal Keberangkatan</small>
              <input type="date" name="tglplg" class="form-control" required>
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
<script>
// BATAS MAKSIMAL CHECKBOX = 2
document.addEventListener("DOMContentLoaded", () => {
  const boxes = document.querySelectorAll('input[name="destinasi[]"]');
  const max = 3;

  boxes.forEach(box => {
    box.addEventListener("change", () => {
      const checked = document.querySelectorAll('input[name="destinasi[]"]:checked').length;
      boxes.forEach(b => b.disabled = checked >= max && !b.checked);
    });
  });
});
</script>

</body>
</html>

<?php $db->close(); ?>
