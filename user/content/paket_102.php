<!-- ================== CAROUSEL (DIPERBAIKI) ================== -->
<!--
PERBAIKAN: Tambahkan class rounded-top agar gambar tidak mepet
PERBAIKAN: letakkan carousel DI ATAS <div class="card-body">
NOTE: ini yang bikin layout-mu pecah kemarin
-->
<div class="card shadow-sm mb-4">
    
    <div class="card-img-top">
        <div id="carouselPaket" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Gambar 1 -->
                <div class="carousel-item active">
                    <img src="./src/paket2/komodo.jpg" class="d-block w-100 carousel-img">
                </div>

                <!-- Gambar 2 -->
                <div class="carousel-item">
                    <img src="./src/paket2/pulau-sebayur.jpg" class="d-block w-100 carousel-img">
                </div>

                <!-- Gambar 3 -->
                <div class="carousel-item">
                    <img src="./src/paket2/pulau-komodo.jpg" class="d-block w-100 carousel-img">
                </div>

            </div>

            <!-- Tombol Prev -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPaket" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <!-- Tombol Next -->
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPaket" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>

    <!-- STYLE UNTUK GAMBAR CAROUSEL -->
    <style>
        .carousel-img {
            height: 350px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>

    <!-- ================== CARD BODY ================== -->
    <div class="card-body">

        <!-- Harga -->
        <h4 class="text-success mb-3">
            Rp <?php echo number_format($paket['harga'], 0, ',', '.'); ?>
        </h4>

        <!-- Deskripsi -->
        <p class="lead"><?php echo $paket['deskripsi']; ?></p>

        <hr class="my-4">

        <!-- Tentang Paket -->
        <h5 class="fw-bold mb-3">Tentang Paket Ini</h5>
        <p>
            Eksplorasi keindahan pulau-pulau ikonik Labuan Bajo. Paket ini menawarkan pengalaman lengkap:
            trekking ringan, melihat komodo langsung, snorkeling, hingga menikmati landscape tebing dan pantai eksotis.
        </p>

        <!-- Destinasi -->
        <h5 class="fw-bold mt-4 mb-3">Destinasi Wisata</h5>

        <div class="row g-3">

            <!-- PULAU KOMODO -->
            <div class="col-md-6">
                <div class="card h-100"><div class="card-body">
                    <h6 class="fw-bold">Pulau Komodo</h6>
                    <p class="small text-muted mb-0">
                        Habitat asli komodo dengan jalur trekking dan pemandangan savana.
                    </p>
                </div></div>
            </div>

            <!-- PULAU RINCA -->
            <div class="col-md-6">
                <div class="card h-100"><div class="card-body">
                    <h6 class="fw-bold">Pulau Rinca</h6>
                    <p class="small text-muted mb-0">
                        Tempat melihat komodo dengan jalur trekking yang lebih ringan.
                    </p>
                </div></div>
            </div>

            <!-- PULAU KANAWA -->
            <div class="col-md-6">
                <div class="card h-100"><div class="card-body">
                    <h6 class="fw-bold">Pulau Kanawa</h6>
                    <p class="small text-muted mb-0">
                        Spot snorkeling dengan air sebening kristal & terumbu karang indah.
                    </p>
                </div></div>
            </div>

            <!-- PULAU KELOR -->
            <div class="col-md-6">
                <div class="card h-100"><div class="card-body">
                    <h6 class="fw-bold">Pulau Kelor</h6>
                    <p class="small text-muted mb-0">
                        Bukit kecil untuk foto panorama spektakuler.
                    </p>
                </div></div>
            </div>

            <!-- PULAU PADAR -->
            <div class="col-md-6">
                <div class="card h-100"><div class="card-body">
                    <h6 class="fw-bold">Pulau Padar</h6>
                    <p class="small text-muted mb-0">
                        Ikon Labuan Bajo dengan view sunrise terbaik.
                    </p>
                </div></div>
            </div>

        </div>

        <!-- Fasilitas -->
        <h5 class="fw-bold mt-4 mb-3">Fasilitas Termasuk</h5>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li>Kapal wisata</li>
                    <li>Penginapan</li>
                    <li>Makan 3x sehari</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li>Ranger Komodo</li>
                    <li>Peralatan snorkeling</li>
                    <li>Dokumentasi</li>
                </ul>
            </div>
        </div>

        <!-- Catatan -->
        <div class="alert alert-warning mt-4">
            <h6 class="fw-bold">⚠️ Catatan Penting:</h6>
            <ul class="mb-0 small">
                <li>Gunakan sepatu trekking</li>
                <li>Patuhi instruksi ranger</li>
                <li>Cuaca bisa mengubah jadwal</li>
                <li>Minimal 2 peserta</li>
            </ul>
        </div>

    </div>
</div>
