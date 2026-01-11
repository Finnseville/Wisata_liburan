<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kembali - Pemesanan Berhasil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: black;
            margin: 0;
            padding: 0;
            line-height: 1.2;
        }
        
        .content {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        
        h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 0 0 20px 0;
            padding: 0;
            color: black;
        }
        
        h2 {
            font-size: 18px;
            font-weight: bold;
            margin: 20px 0 10px 0;
            padding: 0;
            color: black;
        }
        
        h3 {
            font-size: 16px;
            font-weight: bold;
            margin: 15px 0 5px 0;
            padding: 0;
            color: black;
        }
        
        .placeholder {
            font-weight: normal;
            color: #666;
            background-color: #f0f0f0;
            padding: 2px 5px;
            border-radius: 2px;
            font-family: monospace;
        }
        
        .real-data {
            font-weight: normal;
            color: black;
            background-color: transparent;
            padding: 0;
        }
        
        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 20px 0;
            border: none;
        }
        
        .order-detail {
            margin-bottom: 5px;
        }
        
        .empty-space {
            height: 50px;
        }
        
        .back-link {
            display: inline-block;
            margin-top: 30px;
            padding: 8px 16px;
            background-color: black;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Kembali</h1>
        
        <h2>Pemesanan Berhasil Dibuat</h2>
        
        <?php
        // Get data from URL parameters or use placeholders
        $pesanan = isset($_GET['pesanan']) ? $_GET['pesanan'] : '[Paceholder]';
        $name = isset($_GET['name']) ? $_GET['name'] : '[Paceholder]';
        $email = isset($_GET['email']) ? $_GET['email'] : '[Paceholder]';
        $no_hp = isset($_GET['no_hp']) ? $_GET['no_hp'] : '[Paceholder]';
        $jumlah = isset($_GET['jumlah']) ? $_GET['jumlah'] : '[Paceholder]';
        $tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : '[Paceholder]';
        $harga = isset($_GET['harga']) ? $_GET['harga'] : '[Paceholder]';
        
        // Check if we have real data
        $hasData = ($pesanan != '[Paceholder]');
        ?>
        
        <h3>Pesanan : <span class="<?php echo $hasData ? 'real-data' : 'placeholder'; ?>"><?php echo htmlspecialchars($pesanan); ?></span></h3>
        
        <div class="order-detail">
            <strong>Name :</strong> <span class="<?php echo $hasData ? 'real-data' : 'placeholder'; ?>"><?php echo htmlspecialchars($name); ?></span>
        </div>
        
        <div class="order-detail">
            <strong>E-mail :</strong> <span class="<?php echo $hasData ? 'real-data' : 'placeholder'; ?>"><?php echo htmlspecialchars($email); ?></span>
        </div>
        
        <div class="order-detail">
            <strong>No. Hp :</strong> <span class="<?php echo $hasData ? 'real-data' : 'placeholder'; ?>"><?php echo htmlspecialchars($no_hp); ?></span>
        </div>
        
        <div class="order-detail">
            <strong>Jumlah Orang :</strong> <span class="<?php echo $hasData ? 'real-data' : 'placeholder'; ?>"><?php echo htmlspecialchars($jumlah); ?></span>
        </div>
        
        <h3>Tanggal Kaberangkatan : <span class="<?php echo $hasData ? 'real-data' : 'placeholder'; ?>"><?php echo htmlspecialchars($tanggal); ?></span></h3>
        
        <div class="order-detail">
            <strong>Harga :</strong> <span class="<?php echo $hasData ? 'real-data' : 'placeholder'; ?>"><?php echo htmlspecialchars($harga); ?></span>
        </div>
        
        <hr class="divider">
        
        <h2>Deftar Pemesanan</h2>
        
        <!-- Empty space as shown in image -->
        <div class="empty-space"></div>
        
        <?php if ($hasData): ?>
        <div style="text-align: center;">
            <a href="javascript:window.print()" class="back-link">Cetak Halaman</a>
            <a href="index.php" class="back-link" style="margin-left: 10px;">Kembali</a>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>