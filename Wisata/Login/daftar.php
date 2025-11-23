<?php
include "../config/app.php";

if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $role = "User";

    $stmt = $db->prepare("INSERT INTO akun (username, password, role) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $role);

    if ($stmt->execute()) {
        header("Location: login.php?success=1");
    } else {
        $error = "Gagal mendaftar!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar | Traveloka</title>

   <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="register-box">
        <div class="register-logo text-primary">
            <span class="accent1">Na</span><span class="accent2">Tour</span>
        </div>

        <h5 class="text-center fw-bold">Daftar Akun Baru</h5>
        <p class="text-center text-muted mb-4">Buat akun untuk mulai merencanakan perjalanan Anda</p>

       <form method="POST">
    <!-- Username  -->
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
    </div>

    <!-- Password -->
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
    </div>

    <button type="submit" name="daftar" class="btn btn-primary w-100 mt-3">Daftar</button>
    <a href="../user/awal.php" class="btn btn-secondary w-100 mt-3">Kembali</a>
</form>

        <p class="text-center mt-3">
            Sudah punya akun? <a href="login.php" class="text-primary">Masuk sekarang</a>
        </p>

    </div>
</body>
</html>

    
    <style>
        body {
            background: linear-gradient(135deg, var(--accent1), var(--accent2));
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-box {
            width: 100%;
            max-width: 420px;
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.1);
        }

        .register-logo {
            font-size: 26px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            margin-bottom: 20px;
        }

        .toggle-password {
            cursor: pointer;
        }

        .social-btn img {
            width: 20px;
            margin-right: 8px;
        }

        .footer-text {
            text-align: center;
            margin-top: 15px;
            color: #606060;
            font-size: 13px;
        }

        .strength-bar {
            height: 6px;
            border-radius: 5px;
            margin-top: 5px;
        }
    </style>
