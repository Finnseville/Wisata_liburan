<?php
include "../config/app.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "UPDATE pemesanan SET status='dibatalkan' WHERE id_pemesanan='$id'";
    if (mysqli_query($db, $query)) {
        header("Location: daftar_pemesanan.php");
    } else {
        echo "Gagal membatalkan pesanan.";
    }
}
?>
