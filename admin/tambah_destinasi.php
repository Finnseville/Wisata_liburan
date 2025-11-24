<?php
include '../config/app.php';

// ============================
// PROSES SIMPAN DATA
// ============================
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama   = $_POST['nama_destinasi'] ?? '';
    $lokasi = $_POST['lokasi'] ?? '';
    $desk   = $_POST['deskripsi'] ?? '';
    $paket  = $_POST['paket'] ?? '';

    // SIMPAN KE TABEL DESTINASI
    $query = "INSERT INTO destinasi (nama_destinasi, lokasi, deskripsi)
              VALUES ('$nama', '$lokasi', '$desk')";

    if (mysqli_query($db, $query)) {

        $id_destinasi = mysqli_insert_id($db);

        // SIMPAN RELASI PAKET jika ada
        if (!empty($paket)) {
            $cek = mysqli_query($db, "SELECT * FROM paket WHERE id_paket='$paket'");
            if (mysqli_num_rows($cek) > 0) {

                mysqli_query($db, "
                    INSERT INTO paket_destinasi (id_destinasi, id_paket)
                    VALUES ('$id_destinasi', '$paket')
                ");
            }
        }

        header("Location: daftar_destinasi.php?status=success");
        exit;
    } else {
        $error = "Gagal menyimpan data: " . mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4>Tambah Destinasi</h4>
        </div>

        <div class="card-body">

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <form method="POST">

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
                    <textarea name="deskripsi" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Paket</label>
                    <select name="paket" class="form-select">
                        <option value="">-- Pilih Paket --</option>
                        <?php
                        $data = mysqli_query($db, "SELECT * FROM paket");
                        while($p = mysqli_fetch_assoc($data)) {
                            echo "<option value='{$p['id_paket']}'>{$p['nama_paket']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="daftar_destinasi.php" class="btn btn-secondary">Kembali</_
