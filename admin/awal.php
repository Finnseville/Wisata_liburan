<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: ../Login/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow p-5 text-center" style="max-width: 450px; width: 100%; border-radius: 20px;">
      <h2 class="mb-4 fw-bold">Admin Panel</h2>
      <p class="text-muted mb-4">Silakan pilih menu yang ingin Anda kelola:</p>

      <div class="d-grid gap-3">
        <a href="daftar_pesanan.php" class="btn btn-primary btn-lg">Daftar Pesanan</a>
        <a href="daftar_destinasi.php" class="btn btn-success btn-lg">Daftar Destinasi</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
