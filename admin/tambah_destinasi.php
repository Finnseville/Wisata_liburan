
<?php
include '../config/app.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Tambah Destinasi Baru</h4>
        </div>

        <div class="card-body">
            <form action="proses_tambah_destinasi.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Nama Destinasi</label>
                    <input type="text" name="nama_destinasi" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Paket</label>
                    <select name="paket" class="form-select" required>
                        <option value="">-- Pilih Paket --</option>
                        <option value="pantai">Paket Pantai</option>
                        <option value="pulau">Paket Pulau</option>
                        <option value="kuliner">Paket Kuliner</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="daftar_destinasi.php" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
</div>
<?php

$nama   = $_POST['nama_destinasi'];
$lokasi = $_POST['lokasi'];
$desk   = $_POST['deskripsi'];
$paket  = $_POST['paket'];

$query = "INSERT INTO destinasi (nama_destinasi, lokasi, deskripsi, paket)
          VALUES ('$nama', '$lokasi', '$desk', '$paket')";

if (mysqli_query($db, $query)) {
    header("Location: daftar_destinasi.php?status=success");
} else {
    echo "Gagal menambah destinasi: " . mysqli_error($db);
}
?>
</body>
</html>
