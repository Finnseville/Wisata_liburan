<!-- Content Detail Paket Kuliner -->
<div class="card shadow-sm mb-4">
  <div class="bg-gradient" style="background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%); height: 300px; display: flex; align-items: center; justify-content: center;">
    <h1 class="text-white display-4 fw-bold">#<?php echo $paket['nama_paket']; ?></h1>
  </div>

  <div class="card-body">
    <h4 class="text-success mb-3">Rp <?php echo number_format($paket['harga'], 0, ',', '.'); ?></h4>
    <p class="lead"><?php echo $paket['deskripsi']; ?></p>

    <hr class="my-4">

    <!-- Tentang Paket -->
    <h5 class="fw-bold mb-3">Tentang Paket Ini</h5>
    <p>
      Jelajahi kelezatan khas Nusa Tenggara Timur melalui perjalanan kuliner yang autentik. 
      Paket ini menghadirkan cita rasa tradisional yang kaya rempah dan aroma khas 
      yang hanya bisa ditemukan di Flores dan Kupang.
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
              Daging sapi asap khas Kupang, dimasak perlahan dengan asap kayu kosambi 
              sehingga memiliki aroma wangi dan rasa gurih mendalam.
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
              Sambal pedas segar dengan jeruk kunci dan daun kemangi, memiliki rasa khas 
              asam segar yang cocok dipadukan dengan Se’i.
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
              Makanan tradisional berupa jagung tumbuk yang dimasak dengan santan 
              dan kacang merah — lembut, gurih, dan sangat mengenyangkan.
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
