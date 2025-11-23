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
    
    $nama_pelanggan = $post['nama'];
    $email = $post['email'];
    $nohp = $post['nohp'];
    $paket = $post['paket_wisata'];
    
    // AMBIL GUNUNG
    $gunung_dipilih = isset($post['gunung']) ? $post['gunung'] : [];
    $lokasi = !empty($gunung_dipilih[0]) ? $gunung_dipilih[0] : null;
    $lokasi2 = !empty($gunung_dipilih[1]) ? $gunung_dipilih[1] : null;
    
    $tglbrkt = $post['tglbrkt'];
    $tglplg = $post['tglplg'];
    
    // ===== TAMBAH JENIS WISATA INI =====
    $jenis_wisata = isset($post['jenis_wisata']) ? $post['jenis_wisata'] : null;
    
    // Query dengan jenis-wisata
    $query = "INSERT INTO pemesanan_db 
              (nama_pelanggan, email, nohp, paket_wisata, lokasi_wisata, lokasi_wisata2, tanggal_keberangkatan, tanggal_kepulangan, `jenis_wisata`) 
              VALUES ('$nama_pelanggan', '$email', '$nohp', '$paket', '$lokasi', '$lokasi2', '$tglbrkt', '$tglplg', '$jenis_wisata')";
    
    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}
?>