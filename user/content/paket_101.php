<div class="card shadow-sm mb-4">

  <!-- ================== CAROUSEL ================== -->
  <div class="card-img-top">
    <div id="carouselPaket" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="./src/paket1/kelor.jpg" class="d-block w-100 carousel-img">
        </div>

        <div class="carousel-item">
          <img src="./src/paket1/paintaipink.jpg" class="d-block w-100 carousel-img">
        </div>

        <div class="carousel-item">
          <img src="./src/paket1/sebayur.jpg" class="d-block w-100 carousel-img">
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

  <!-- STYLE -->
  <style>
    .carousel-img {
      height: 350px;
      object-fit: cover;
      border-radius: 8px;
    }
  </style>

  <!-- ================== CARD BODY ================== -->
  <div class="card-body">

    <h4 class="text-success mb-3">Rp <?php echo number_format($paket['harga'], 0, ',', '.'); ?></h4>
    <p class="lead"><?php echo $paket['deskripsi']; ?></p>

    <hr class="my-4">

    <!-- Deskripsi Detail -->
    <h5 class="fw-bold mb-3">Tentang Paket Ini</h5>
    <p>
      Paket ini menghadirkan pengalaman menikmati tiga pantai terbaik dan paling ikonik di Labuan Bajo. 
      Anda akan menjelajahi pasir putih, air laut jernih, world-class snorkeling spot, 
      dan panorama alam khas Nusa Tenggara Timur yang mempesona.
    </p>

    <!-- Destinasi -->
    <h5 class="fw-bold mt-4 mb-3">Destinasi Wisata</h5>
    <div class="row g-3">

      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="fw-bold">Pantai Sebayur</h6>
            <p class="small text-muted mb-0">
              Air sebening kristal dan spot snorkeling dengan terumbu karang warna-warni.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="fw-bold">Pantai Kelor</h6>
            <p class="small text-muted mb-0">
              Bukit kecil ikonik untuk foto panorama 360° dan air laut jernih.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="fw-bold">Pantai Pink</h6>
            <p class="small text-muted mb-0">
              Pasir pink alami, spot foto favorit dan tempat snorkeling yang menakjubkan.
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
          <li>Transportasi kapal wisata</li>
          <li>Penginapan nyaman</li>
          <li>Makan 3x sehari</li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="list-unstyled">
          <li>Pemandu wisata profesional</li>
          <li>Peralatan snorkeling</li>
          <li>Dokumentasi foto/video</li>
        </ul>
      </div>
    </div>

    <!-- Catatan -->
    <div class="alert alert-warning mt-4">
      <h6 class="fw-bold">⚠️ Catatan Penting:</h6>
      <ul class="mb-0 small">
        <li>Gunakan sunscreen untuk menghindari kulit terbakar</li>
        <li>Bawa baju ganti & dry bag</li>
        <li>Cuaca dapat mengubah jadwal keberangkatan</li>
        <li>Minimal 2 peserta</li>
      </ul>
    </div>

  </div>
</div>
