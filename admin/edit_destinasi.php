<?php
include '../config/app.php';

if (!isset($_GET['id'])) {
    echo "<script>
        alert('ID tidak ditemukan!');
        window.location='daftar_destinasi.php';
    </script>";
    exit;
}

$id = $_GET['id'];

// Ambil data destinasi berdasarkan ID
$query = "
    SELECT d.*, pd.id_paket 
    FROM destinasi d
    LEFT JOIN paket_destinasi pd 
        ON d.id_destinasi = pd.id_destinasi
    WHERE d.id_destinasi = '$id'
";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);

// Ambil semua paket untuk dropdown
$paketQuery = mysqli_query($db, "SELECT * FROM paket");

// Jika tombol simpan ditekan
if (isset($_POST['update'])) {
    $nama = $_POST['nama_destinasi'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi'];
    $id_paket = $_POST['id_paket'];

    // Update tabel destinasi
    mysqli_query($db, "
        UPDATE destinasi 
        SET nama_destinasi='$nama',
            lokasi='$lokasi',
            deskripsi='$deskripsi'
        WHERE id_destinasi='$id'
    ");

    // Update relasi paket
    mysqli_query($db, "DELETE FROM paket_destinasi WHERE id_destinasi='$id'");
    mysqli_query($db, "
        INSERT INTO paket_destinasi (id_destinasi, id_paket)
        VALUES ('$id', '$id_paket')
    ");

    echo "<script>
        alert('Data berhasil diupdate!');
        window.location='daftar_destinasi.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning">
            <h4 class="mb-0">Edit Destinasi</h4>
        </div>
        <div class="card-body">
            <form method="POST">

                <div class="mb-3">
                    <label>Nama Destinasi</label>
                    <input type="text" name="nama_destinasi" class="form-control"
                        value="<?= $data['nama_destinasi'] ?>" required>
                </div>

                <div class="mb-3">
                    <label>Lokasi</label>
                    <input type="text" name="lokasi" class="form-control"
                        value="<?= $data['lokasi'] ?>" required>
                </div>

                <div class="mb-3">
                    <label>Pilih Paket</label>
                    <select name="id_paket" class="form-control" required>
                        <option value="">-- Pilih Paket --</option>
                        <?php while($p = mysqli_fetch_assoc($paketQuery)): ?>
                            <option value="<?= $p['id_paket']; ?>"
                                <?= ($p['id_paket'] == $data['id_paket']) ? 'selected' : '' ?>>
                                <?= $p['nama_paket']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" required><?= $data['deskripsi'] ?></textarea>
                </div>

                <button type="submit" name="update" class="btn btn-success">Simpan Perubahan</button>
                <a href="daftar_destinasi.php" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>
