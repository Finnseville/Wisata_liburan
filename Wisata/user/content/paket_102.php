<!-- Content Detail Paket Pulau -->
<div class="card shadow-sm mb-4">
  <div class="bg-gradient" style="background: linear-gradient(135deg, #1fa2ff 0%, #12d8fa 50%, #a6ffcb 100%); height: 300px; display: flex; align-items: center; justify-content: center;">
    <h1 class="text-white display-4 fw-bold">#<?php echo $paket['nama_paket']; ?></h1>
  </div>

  <div class="card-body">
    <h4 class="text-success mb-3">Rp <?php echo number_format($paket['harga'], 0, ',', '.'); ?></h4>
    <p class="lead"><?php echo $paket['deskripsi']; ?></p>

    <hr class="my-4">

    <!-- Tentang Paket -->
    <h5 class="fw-bold mb-3">Tentang Paket Ini</h5>
    <p>
      Eksplorasi keindahan pulau-pulau ikonik di Labuan Bajo yang terkenal di seluruh dunia. 
      Paket ini menawarkan pengalaman lengkap menjelajahi pulau eksotis, trekking ringan, 
      melihat komodo secara langsung, hingga menikmati landscape tebing dan pantai yang dramatis.
    </p>

    <!-- Destinasi -->
    <h5 class="fw-bold mt-4 mb-3">Destinasi Wisata</h5>

    <div class="row g-3">

      <!-- PULAU KOMODO -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="fw-bold">Pulau Komodo</h6>
            <p class="small text-muted mb-0">
              Habitat asli komodo. Nikmati trekking bersama ranger untuk melihat komodo 
              secara langsung serta menikmati pemandangan alam khas savana.
            </p>
          </div>
        </div>
      </div>

      <!-- PULAU RINCA -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="fw-bold">Pulau Rinca</h6>
            <p class="small text-muted mb-0">
              Alternatif terbaik untuk melihat komodo dengan jalur trekking yang lebih pendek 
              serta panorama bukit savana yang luas.
            </p>
          </div>
        </div>
      </div>

      <!-- PULAU KANAWA -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="fw-bold">Pulau Kanawa</h6>
            <p class="small text-muted mb-0">
              Pulau kecil dengan air sebening kristal dan hamparan terumbu karang. 
              Surga snorkeling dengan ikan-ikan tropis.
            </p>
          </div>
        </div>
      </div>

      <!-- PULAU KELOR -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="fw-bold">Pulau Kelor</h6>
            <p class="small text-muted mb-0">
              Pulau dengan bukit kecil yang bisa didaki untuk menikmati panorama spectacular 
              dari atas. Sangat instagramable.
            </p>
          </div>
        </div>
      </div>

      <!-- PULAU PADAR -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="fw-bold">Pulau Padar</h6>
            <p class="small text-muted mb-0">
              Ikon Labuan Bajo dengan bukit view terkenal berbentuk tanjung berkelok. 
              Sunrise terbaik di NTT ada di sini.
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
          <li>Kapal wisata (open deck / cabin)</li>
          <li>Penginapan (hotel / kapal liveaboard)</li>
          <li>Makan 3x sehari</li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="list-unstyled">
          <li>Ranger di Pulau Komodo & Rinca</li>
          <li>Peralatan snorkeling</li>
          <li>Dokumentasi foto/video</li>
        </ul>
      </div>
    </div>

    <!-- Catatan -->
    <div class="alert alert-warning mt-4">
      <h6 class="fw-bold">⚠️ Catatan Penting:</h6>
      <ul class="mb-0 small">
        <li>Gunakan sepatu trekking untuk naik ke bukit</li>
        <li>Patuhi instruksi ranger saat berada dekat komodo</li>
        <li>Jadwal dapat berubah sesuai kondisi cuaca</li>
        <li>Minimal 2 peserta</li>
      </ul>
    </div>
  </div>
</div>
