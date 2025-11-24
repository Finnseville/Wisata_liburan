<?php
include '../config/app.php';

$id = $_GET['id'] ?? null;

if(!$id){
    die("ID tidak ditemukan");
}

// Update status jadi 'dibatalkan'
$query = "UPDATE pemesanan 
          SET status='dibatalkan' 
          WHERE id_pemesanan='$id'";

mysqli_query($db, $query);

header("Location: daftar_pesanan.php");
exit;
