<?php
include 'db.php';

function select($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function create_pesanan($post){
    global $db;

    $nama       = mysqli_real_escape_string($db, $post['nama']);
    $email      = mysqli_real_escape_string($db, $post['email']);
    $telepon    = mysqli_real_escape_string($db, $post['nohp']);
    $id_paket   = intval($post['id_paket']);
    $tglbrkt    = $post['tglbrkt'];
    $jumlah_org = intval($post['jumlah_org']);

    // Ambil data paket
    $paket = $db->query("SELECT * FROM paket WHERE id_paket = $id_paket")->fetch_assoc();
    if(!$paket) return 0;

    $durasi = $paket['durasi'];
    $harga  = $paket['harga'];

    // Hitung total bayar
    $total_bayar = $harga * $jumlah_org;

    $status = 'menunggu';

    // Insert ke tabel pemesanan
    $query = "INSERT INTO pemesanan 
(nama_pelanggan, email, telepon, id_akun, id_paket, tanggal_berangkat, durasi, jumlah_orang, total_bayar, status)
VALUES
('$nama', '$email', '$telepon', '$id_akun', '$id_paket', '$tglbrkt', '$durasi', '$jumlah_org', '$total_bayar', '$status')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
?>