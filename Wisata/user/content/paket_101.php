<!-- Content Detail Paket Pantai -->
<div class="card shadow-sm mb-4">
  <div class="bg-gradient" style="background: linear-gradient(135deg, #00b4db 0%, #0083b0 100%); height: 300px; display: flex; align-items: center; justify-content: center;">
    <h1 class="text-white display-4 fw-bold">#<?php echo $paket['nama_paket']; ?></h1>
  </div>
  
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
      
      <!-- PANTAI SEBAYUR -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="fw-bold">Pantai Sebayur</h6>
            <p class="small text-muted mb-0">
              Pantai dengan air sebening kristal dan spot snorkeling terbaik. 
              Dipenuhi terumbu karang warna-warni dan ikan tropis.
            </p>
          </div>
        </div>
      </div>

      <!-- PANTAI KELOR -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="fw-bold">Pantai Kelor</h6>
            <p class="small text-muted mb-0">
              Pantai terkenal dengan bukit kecil yang dapat didaki untuk menikmati 
              panorama 360° Labuan Bajo. Pasir putih halus & air jernih.
            </p>
          </div>
        </div>
      </div>

      <!-- PANTAI PINK -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="fw-bold">Pantai Pink</h6>
            <p class="small text-muted mb-0">
              Pantai dengan pasir berwarna pink alami, salah satu dari sedikit di dunia. 
              Sangat indah untuk foto, snorkeling, dan menikmati sunrise.
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
        <li>Dianjurkan membawa baju ganti & dry bag</li>
        <li>Cuaca dapat memengaruhi jadwal keberangkatan</li>
        <li>Minimal peserta 2 orang</li>
      </ul>
    </div>
  </div>
</div>
