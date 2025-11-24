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

// 1️⃣ Hapus relasi di tabel paket_destinasi dulu
mysqli_query($db, "DELETE FROM paket_destinasi WHERE id_destinasi='$id'");

// 2️⃣ Hapus destinasi utama
$hapus = mysqli_query($db, "DELETE FROM destinasi WHERE id_destinasi='$id'");

if ($hapus) {
    echo "<script>
        alert('Destinasi berhasil dihapus!');
        window.location='daftar_destinasi.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal menghapus destinasi!');
        window.location='daftar_destinasi.php';
    </script>";
}
?>
