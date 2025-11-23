<?php
include '../config/app.php';

$data = select("SELECT * FROM pemesanan ORDER BY id_pemesanan DESC");
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Pemesanan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="awal.php">← Kembali</a>
    <span class="navbar-brand mb-0 h1">Daftar Pemesanan</span>
  </div>
</nav>

<div class="container my-4">
  <h2>Data Pemesanan</h2>

  <table class="table table-bordered table-striped">
    <thead class="table-primary text-center">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Paket</th>
        <th>Tanggal Berangkat</th>
        <th>Total Bayar</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>
      <?php $no = 1; foreach ($data as $row) : ?>
      <tr>
        <td class="text-center"><?= $no++; ?></td>
        <td><?= $row['nama_pelanggan']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['telepon']; ?></td>
        <td><?= $row['id_paket']; ?></td>
        <td><?= $row['tanggal_berangkat']; ?></td>
        <td>Rp <?= number_format($row['total_bayar']); ?></td>

        <td class="text-center">
  <?php if ($row['status'] == 'menunggu'): ?>
    <a href="konfirmasi.php?id=<?= $row['id_pemesanan']; ?>" 
       class="btn btn-success btn-sm"
       onclick="return confirm('Konfirmasi pesanan ini?')">
       ✅ Konfirmasi
    </a>

    <a href="tolak.php?id=<?= $row['id_pemesanan']; ?>" 
       class="btn btn-danger btn-sm"
       onclick="return confirm('Batalkan pesanan ini?')">
       ❌ Batalkan
    </a>
  <?php else: ?>
    <span class="text-muted">Selesai</span>
  <?php endif; ?>
</td>

        <td class="text-center">
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
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>
