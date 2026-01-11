<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Berhasil - NATOUR</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #1458DF 0%, #0F9D46 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            width: 100%;
            position: relative;
        }

        .back-button {
            display: flex;
            align-items: center;
            color: white;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
            text-decoration: none;
            cursor: pointer;
        }

        .back-button svg {
            margin-right: 15px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 50px 40px 40px 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            position: relative;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-icon {
            width: 120px;
            height: 120px;
            background: #00ff00;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -90px auto 30px auto;
            box-shadow: 0 10px 30px rgba(0,255,0,0.3);
            animation: pop 0.5s ease-out 0.3s backwards;
        }

        @keyframes pop {
            0% {
                transform: scale(0);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        .success-icon svg {
            width: 60px;
            height: 60px;
            stroke: white;
            stroke-width: 4;
            fill: none;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            animation: checkmark 0.6s ease-out 0.6s forwards;
        }

        @keyframes checkmark {
            to {
                stroke-dashoffset: 0;
            }
        }

        h2 {
            text-align: center;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #333;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
            font-size: 16px;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 600;
            color: #555;
        }

        .detail-value {
            color: #333;
            text-align: right;
            font-weight: 500;
        }

        .detail-value.placeholder {
            color: #999;
            font-style: italic;
        }

        .button-container {
            margin-top: 40px;
            text-align: center;
        }

        .btn-primary {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 50px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            transition: all 0.3s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.6);
        }

        .btn-secondary {
            display: inline-block;
            background: white;
            color: #667eea;
            border: 2px solid #667eea;
            padding: 13px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            margin-left: 15px;
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background: #667eea;
            color: white;
        }

        @media (max-width: 600px) {
            .card {
                padding: 40px 25px 30px 25px;
            }

            h2 {
                font-size: 22px;
            }

            .detail-row {
                flex-direction: column;
                gap: 5px;
            }

            .detail-value {
                text-align: left;
            }

            .btn-primary, .btn-secondary {
                display: block;
                margin: 10px 0;
            }
        }

        @media print {
            body {
                background: white;
            }
            .back-button, .button-container {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="javascript:history.back()" class="back-button">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
            Kembali
        </a>

        <div class="card">
            <div class="success-icon">
                <svg viewBox="0 0 52 52">
                    <path d="M14 27l7.5 7.5L38 18"/>
                </svg>
            </div>

            <h2>Pemesanan Berhasil Dibuat</h2>

            <?php
            // Get data from URL or POST
            $pesanan = isset($_GET['pesanan']) ? htmlspecialchars($_GET['pesanan']) : '{Placeholder}';
            $nama = isset($_GET['nama']) ? htmlspecialchars($_GET['nama']) : '{Placeholder}';
            $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '{Placeholder}';
            $no_hp = isset($_GET['no_hp']) ? htmlspecialchars($_GET['no_hp']) : '{Placeholder}';
            $jumlah = isset($_GET['jumlah']) ? htmlspecialchars($_GET['jumlah']) : '{Placeholder}';
            $tanggal = isset($_GET['tanggal']) ? htmlspecialchars($_GET['tanggal']) : '{Placeholder}';
            $harga = isset($_GET['harga']) ? 'Rp ' . number_format($_GET['harga'], 0, ',', '.') : '{Placeholder}';
            
            $hasData = ($pesanan != '{Placeholder}');
            ?>

            <div class="details">
                <div class="detail-row">
                    <span class="detail-label">Pesanan :</span>
                    <span class="detail-value <?php echo !$hasData ? 'placeholder' : ''; ?>"><?php echo $pesanan; ?></span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Nama :</span>
                    <span class="detail-value <?php echo !$hasData ? 'placeholder' : ''; ?>"><?php echo $nama; ?></span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">E-mail :</span>
                    <span class="detail-value <?php echo !$hasData ? 'placeholder' : ''; ?>"><?php echo $email; ?></span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">No. Hp :</span>
                    <span class="detail-value <?php echo !$hasData ? 'placeholder' : ''; ?>"><?php echo $no_hp; ?></span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Jumlah Orang :</span>
                    <span class="detail-value <?php echo !$hasData ? 'placeholder' : ''; ?>"><?php echo $jumlah; ?></span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Tanggal Keberangkatan :</span>
                    <span class="detail-value <?php echo !$hasData ? 'placeholder' : ''; ?>"><?php echo $tanggal; ?></span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Harga :</span>
                    <span class="detail-value <?php echo !$hasData ? 'placeholder' : ''; ?>"><?php echo $harga; ?></span>
                </div>
            </div>

            <div class="button-container">
                <a href="daftar_pemesanan.php" class="btn-primary">Daftar Pemesanan</a>
            </div>
        </div>
    </div>
</body>
</html>