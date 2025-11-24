<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Daftar Destinasi</h4>
        </div>
        <a href="tambah_destinasi.php" class="btn btn-light btn-sm">
                <i class="fa fa-plus me-1"></i> Tambah Destinasi
            </a>

        <div class="card-body">
             <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Destinasi</th>
                            <th>Lokasi</th>
                            <th>Paket</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include '../config/app.php';

                        $query = "SELECT * FROM destinasi ORDER BY id_destinasi ASC";
                        $result = mysqli_query($db, $query);

                        $no = 1;
                        while ($d = mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d['nama_destinasi'] ?></td>
                            <td><?= $d['lokasi'] ?></td>
                            <td>
                                <span class="badge bg-info text-dark">
                                    <?= ucfirst($d['paket']) ?>
                                </span>
                            </td>
                            <td><?= $d['deskripsi'] ?></td>
                            <td>
                                <a href="edit_destinasi.php?id=<?= $d['id_destinasi'] ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="hapus_destinasi.php?id=<?= $d['id_destinasi'] ?>" 
                                   onclick="return confirm('Hapus destinasi ini?')" 
                                   class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>

                    </tbody>
                </table>
        </div>
    </div>
</div>

</body>
</html>
