<div class="card shadow-sm mb-4">

    <!-- CAROUSEL GAMBAR -->
    <div class="card-img-top">
        <div id="carouselPaket3" class="carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-inner">

                <!-- Gambar 1 -->
                <div class="carousel-item active">
                    <img src="./src/paket3/sei sapi.jpg" class="d-block w-100" style="height:300px; object-fit:cover;">
                </div>

                <!-- Gambar 2 -->
                <div class="carousel-item">
                    <img src="./src/paket3/sambal luat.jpg" class="d-block w-100" style="height:300px; object-fit:cover;">
                </div>

                <!-- Gambar 3 -->
                <div class="carousel-item">
                    <img src="./src/paket3/jagung bose.jpg" class="d-block w-100" style="height:300px; object-fit:cover;">
                </div>

            </div>

            <!-- Tombol Prev -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPaket3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <!-- Tombol Next -->
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPaket3" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>

    <!-- BODY KONTEN -->
    <div class="card-body">
        <h4 class="text-success mb-3">
            Rp <?php echo number_format($paket['harga'], 0, ',', '.'); ?>
        </h4>

        <p class="lead"><?php echo $paket['deskripsi']; ?></p>

        <hr class="my-4">

        <!-- Tentang Paket -->
        <h5 class="fw-bold mb-3">Tentang Paket Ini</h5>
        <p>
            Jelajahi kelezatan khas Nusa Tenggara Timur melalui perjalanan kuliner autentik.
            Paket ini menghadirkan cita rasa tradisional yang kaya rempah dari Flores dan Kupang.
        </p>

        <!-- Hidangan -->
        <h5 class="fw-bold mt-4 mb-3">Hidangan Utama</h5>

        <div class="row g-3">

            <!-- SE'I DAGING SAPI -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="fw-bold">Se’i Daging Sapi</h6>
                        <p class="small text-muted mb-0">
                            Daging sapi asap khas Kupang dengan aroma kayu kosambi.
                        </p>
                    </div>
                </div>
            </div>

            <!-- SAMBAL LUAT -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="fw-bold">Sambal Luat</h6>
                        <p class="small text-muted mb-0">
                            Sambal pedas segar dengan jeruk kunci & daun kemangi.
                        </p>
                    </div>
                </div>
            </div>

            <!-- JAGUNG BOSE -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="fw-bold">Jagung Bose</h6>
                        <p class="small text-muted mb-0">
                            Jagung tumbuk dimasak santan & kacang merah — lembut dan gurih.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Fasilitas -->
        <h5 class="fw-bold mt-4 mb-3">Fasilitas Termasuk</h5>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li>Transportasi ke lokasi kuliner</li>
                    <li>Makan dengan menu khas</li>
                    <li>Pemandu lokal</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li>Minuman segar lokal</li>
                    <li>Dokumentasi foto</li>
                </ul>
            </div>
        </div>

        <!-- Catatan -->
        <div class="alert alert-warning mt-4">
            <h6 class="fw-bold">⚠️ Catatan Penting:</h6>
            <ul class="mb-0 small">
                <li>Menu dapat berubah sesuai ketersediaan bahan</li>
                <li>Notifikasi alergi harus disampaikan sebelum perjalanan</li>
                <li>Program berlangsung setengah hari</li>
            </ul>
        </div>

    </div>
</div>
