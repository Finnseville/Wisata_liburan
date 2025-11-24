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

function create_pesanan($data) {
    global $db;

    session_start();

    $id_akun = $_SESSION['id_akun'] ?? null;
    if(!$id_akun) {
        return 0;
    }

    $nama   = mysqli_real_escape_string($db, $data['nama']);
    $email  = mysqli_real_escape_string($db, $data['email']);
    $nohp   = mysqli_real_escape_string($db, $data['nohp']);
    $jumlah = (int)$data['jumlah_org'];
    $paket  = (int)$data['id_paket'];
    $tglbrk = $data['tglbrkt'];
    $tglplg = $data['tglplg'];
    $destinasi = $data['destinasi'] ?? [];

    // Ambil harga paket
    $q = $db->query("SELECT harga FROM paket WHERE id_paket = $paket");
    $pkt = $q->fetch_assoc();
    $harga = (int)$pkt['harga'];

    // Hitung durasi hari
    $durasi = (strtotime($tglplg) - strtotime($tglbrk)) / 86400;
    if($durasi < 1) $durasi = 1;

    // Hitung total bayar
    $total = $harga * $jumlah;

    // Simpan ke tabel pemesanan
   $db->query("INSERT INTO pemesanan 
    (id_akun, id_paket, nama_pelanggan, email, telepon, tanggal_berangkat, durasi, jumlah_orang, total_bayar, status)
    VALUES 
    ($id_akun, $paket, '$nama', '$email', '$nohp', '$tglbrk', '$durasi Hari', $jumlah, $total, 'menunggu')
");

    $id_pemesanan = $db->insert_id;

    // Simpan ke tabel pemesanan_destinasi
    foreach($destinasi as $id_dest) {
        $id_dest = (int)$id_dest;
        $db->query("INSERT INTO pemesanan_destinasi (id_pemesanan, id_destinasi)
                    VALUES ($id_pemesanan, $id_dest)");
    }

    return $id_pemesanan;
}

function tampilkan_gambar($nama_file) {
    $base_path = "src/paket1/";
    $default = "src/no-image.jpg";

    if (!empty($nama_file) && file_exists($base_path . $nama_file)) {
        return $base_path . $nama_file;
    } else {
        return $default;
    }
}
?>