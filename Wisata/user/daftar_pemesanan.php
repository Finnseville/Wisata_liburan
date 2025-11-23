<?php
session_start();
include "../config/app.php";

if (!isset($_SESSION['username'])) {
    header("Location: ../Login/login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Pemesanan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
  <h2 class="mb-4 text-center fw-bold">📋 Daftar Pemesanan Saya</h2>

  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>Paket</th>
          <th>Tanggal Berangkat</th>
          <th>Durasi</th>
          <th>Jumlah Orang</th>
          <th>Total Bayar</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
      <?php
      $query = "
  SELECT p.*, pk.nama_paket 
  FROM pemesanan p
  LEFT JOIN paket pk ON p.id_paket = pk.id_paket
  ORDER BY p.id_pemesanan DESC
";

      $result = $db->query($query);
      $no = 1;

      if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $row['nama_paket'] ?? 'Paket tidak ditemukan'; ?></td>    
          <td><?= $row['tanggal_berangkat']; ?></td>
          <td><?= $row['durasi']; ?></td>
          <td><?= $row['jumlah_orang']; ?></td>
          <td>Rp <?= number_format($row['total_bayar'],0,',','.'); ?></td>
          <td>
            <?php if ($row['status'] == 'menunggu'): ?>
              <span class="badge bg-warning text-dark">Menunggu</span>
            <?php elseif ($row['status'] == 'dikonfirmasi'): ?>
              <span class="badge bg-success">Dikonfirmasi</span>
            <?php elseif ($row['status'] == 'dibatalkan'): ?>
              <span class="badge bg-danger">Dibatalkan</span>
            <?php else: ?>
              <span class="badge bg-secondary"><?= $row['status']; ?></span>
            <?php endif; ?>
          </td>
          <td>
            <?php if ($row['status'] == 'menunggu'): ?>
              <a href="batal_pesanan.php?id=<?= $row['id_pemesanan']; ?>" 
                 class="btn btn-danger btn-sm"
                 onclick="return confirm('Yakin ingin membatalkan pesanan?')">
                 ❌ Batalkan
              </a>
            <?php else: ?>
              <span class="text-muted">-</span>
            <?php endif; ?>
          </td>
        </tr>
      <?php 
        }
      } else {
        echo "<tr><td colspan='8'>Belum ada pesanan.</td></tr>";
      }
      ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
