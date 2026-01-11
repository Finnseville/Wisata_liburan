<?php
session_start();
include "../config/app.php";

if (!isset($_SESSION['username'])) {
    header("Location: ../Login/login.php");
    exit;
}

$username = $_SESSION['username'];

// Ambil id_akun dari username
$getUser = $db->query("SELECT id_akun FROM akun WHERE username='$username'");
$user = $getUser->fetch_assoc();
$id_akun = $user['id_akun'];

// Jika tombol batal diklik
if (isset($_GET['batalkan'])) {
    $id = (int) $_GET['batalkan'];
    $db->query("UPDATE pemesanan SET status='dibatalkan' WHERE id_pemesanan=$id AND id_akun=$id_akun");
    header("Location: daftar_pemesanan.php?cancel=success");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Saya - NATOUR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1458DF 0%, #0F9D46 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
        }

        .page-header {
            background: white;
            padding: 30px 40px;
            border-radius: 20px 20px 0 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .page-title {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 0;
        }

        .page-title i {
            font-size: 32px;
            color: #667eea;
        }

        .page-title h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            color: #333;
        }

        .user-info {
            text-align: right;
        }

        .user-info .username {
            font-size: 16px;
            color: #666;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-back {
            margin-top: 10px;
            background: linear-gradient(135deg, #1458DF 0%, #0F9D46 100%);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
            color: white;
        }

        .content-card {
            background: white;
            padding: 40px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            animation: fadeIn 0.6s ease-out 0.2s backwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-custom {
            border-radius: 15px;
            border: none;
            padding: 15px 20px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .table-container {
            overflow-x: auto;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .table-custom {
            margin: 0;
            background: white;
        }

        .table-custom thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .table-custom thead th {
            padding: 18px 15px;
            font-weight: 600;
            border: none;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
        }

        .table-custom tbody tr {
            transition: all 0.3s;
            border-bottom: 1px solid #f0f0f0;
        }

        .table-custom tbody tr:hover {
            background: #f8f9ff;
            transform: scale(1.01);
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }

        .table-custom tbody td {
            padding: 20px 15px;
            vertical-align: middle;
            color: #333;
        }

        .badge-custom {
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 12px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .badge-warning {
            background: #fff3cd;
            color: #856404;
        }

        .badge-success {
            background: #d4edda;
            color: #155724;
        }

        .badge-danger {
            background: #f8d7da;
            color: #721c24;
        }

        .btn-cancel {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 3px 10px rgba(245, 87, 108, 0.3);
        }

        .btn-cancel:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(245, 87, 108, 0.5);
            color: white;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-state i {
            font-size: 80px;
            color: #ddd;
            margin-bottom: 20px;
        }

        .empty-state h4 {
            color: #999;
            margin-bottom: 10px;
        }

        .empty-state p {
            color: #bbb;
        }

        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .user-info {
                text-align: center;
            }

            .content-card {
                padding: 20px;
            }

            .table-custom {
                font-size: 13px;
            }

            .table-custom thead th,
            .table-custom tbody td {
                padding: 12px 8px;
            }
        }
    </style>
</head>
<body>

<div class="container-custom">
    <!-- Header -->
    <div class="page-header">
        <div class="page-title">
            <i class="fas fa-list-alt"></i>
            <h2>Pemesanan Saya</h2>
        </div>
        <div class="user-info">
            <div class="username">
                <i class="fas fa-user-circle"></i>
                <span><?php echo htmlspecialchars($username); ?></span>
            </div>
            <a href="awal.php" class="btn-back">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
    </div>

    <!-- Content -->
    <div class="content-card">
        <?php if(isset($_GET['cancel'])): ?>
        <div class="alert alert-success alert-custom">
            <i class="fas fa-check-circle fa-lg"></i>
            <div>Pemesanan berhasil dibatalkan.</div>
        </div>
        <?php endif; ?>

        <div class="table-container">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Paket Wisata</th>
                        <th>Tanggal</th>
                    
                        <th>Peserta</th>
                        <th>Total Bayar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "
                        SELECT p.*, pk.nama_paket 
                        FROM pemesanan p
                        JOIN paket pk ON p.id_paket = pk.id_paket
                        WHERE p.id_akun = $id_akun
                        ORDER BY p.id_pemesanan DESC
                    ";

                    $result = $db->query($query);
                    $no = 1;

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><strong><?= $no++ ?></strong></td>
                                <td>
                                    <i class="fas fa-mountain text-primary me-2"></i>
                                    <?= htmlspecialchars($row['nama_paket']) ?>
                                </td>
                                <td>
                                    <i class="far fa-calendar-alt text-secondary me-2"></i>
                                    <?= date('d M Y', strtotime($row['tanggal_berangkat'])) ?>
                                </td>
                                <td>
                                    <i class="fas fa-users text-info me-2"></i>
                                    <?= $row['jumlah_orang'] ?> orang
                                </td>
                                <td>
                                    <strong>Rp <?= number_format($row['total_bayar'],0,',','.') ?></strong>
                                </td>
                                <td>
                                    <?php if ($row['status'] == 'menunggu'): ?>
                                        <span class="badge-custom badge-warning">
                                            <i class="fas fa-clock"></i>
                                            Menunggu
                                        </span>
                                    <?php elseif ($row['status'] == 'dikonfirmasi'): ?>
                                        <span class="badge-custom badge-success">
                                            <i class="fas fa-check-circle"></i>
                                            Dikonfirmasi
                                        </span>
                                    <?php else: ?>
                                        <span class="badge-custom badge-danger">
                                            <i class="fas fa-times-circle"></i>
                                            Dibatalkan
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($row['status'] == 'menunggu'): ?>
                                        <a href="?batalkan=<?= $row['id_pemesanan']; ?>" 
                                           class="btn-cancel"
                                           onclick="return confirm('Yakin ingin membatalkan pesanan ini?')">
                                            <i class="fas fa-times-circle"></i>
                                            Batalkan
                                        </a>
                                    <?php else: ?>
                                        <span class="text-muted">-</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                    ?>
                        <tr>
                            <td colspan="8">
                                <div class="empty-state">
                                    <i class="fas fa-inbox"></i>
                                    <h4>Belum Ada Pemesanan</h4>
                                    <p>Anda belum memiliki riwayat pemesanan</p>
                                    <a href="awal.php" class="btn-back mt-3">
                                        <i class="fas fa-plus-circle"></i>
                                        Buat Pemesanan Baru
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>