@extends('layout')

@section('title', 'About Me')

@section('content')
<style>
  body {
    background: linear-gradient(135deg, #1a1a2e, #16213e);
    color: #e0e0e0;
    font-family: 'Segoe UI', sans-serif;
  }

  .profile-section {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 1rem;
    padding: 2.5rem;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
    margin-bottom: 3rem;
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.1);
  }

  .profile-img {
    width: 160px;
    height: 160px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #00adb5;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
  }

  .section-title {
    font-weight: 600;
    margin-bottom: 1rem;
    color: #00adb5;
    text-transform: uppercase;
  }

  .info-box {
    padding: 1rem;
    background-color: rgba(255, 255, 255, 0.05);
    border-left: 4px solid #00adb5;
    border-radius: 0.5rem;
    margin-bottom: 1rem;
  }

  .card-skill {
    border: none;
    border-radius: 1rem;
    background: rgba(255, 255, 255, 0.05);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s ease;
    backdrop-filter: blur(6px);
  }

  .card-skill:hover {
    transform: translateY(-5px);
  }

  .card-skill h5 {
    color: #e0e0e0;
  }

  .card-skill p {
    color: #bbbbbb;
  }

  .social-icons a {
    font-size: 1.5rem;
    margin-right: 1rem;
    color: #00adb5;
    transition: color 0.3s;
  }

  .social-icons a:hover {
    color: #f8f8f8;
  }

  .list-group-item {
    background-color: transparent;
    color: #dcdcdc;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }
</style>

<div class="container py-5">
  <!-- Profil Utama -->
  <div class="profile-section text-center">
    <img src="foto/pri.jpg" class="profile-img mb-3" alt="Foto Profil">
    <h2 class="fw-bold mb-1">Iqbal Ghozi Basyaasyah</h2>
    <p class="subtitle-role fw-semibold" style="font-size: 1.1rem; color: #00adb5;">
  Web Developer • UI/UX Designer • Informatics Student
</p>

    <div class="social-icons mt-3">
      <a href="https://linkedin.com/in/iqbalghozi" target="_blank"><i class="bi bi-linkedin"></i></a>
      <a href="https://github.com/balle-hue" target="_blank"><i class="bi bi-github"></i></a>
      <a href="https://instagram.com/zee_ini" target="_blank"><i class="bi bi-instagram"></i></a>
    </div>
  </div>

  <!-- Tentang Saya -->
  <div class="profile-section">
    <h4 class="section-title">Tentang Saya</h4>
    <p>
      Saya adalah pelajar Jurusan Pengembangan Perangkat Lunak Dan Gim yang memiliki ketertarikan dalam pengembangan aplikasi web dan desain antarmuka pengguna. Saya percaya bahwa teknologi bukan hanya tentang fungsionalitas, tetapi juga tentang menciptakan pengalaman pengguna yang menyenangkan dan desain yang elegan.
    </p>
  </div>

  <!-- Informasi Pribadi -->
  <div class="profile-section">
    <h4 class="section-title">Informasi Pribadi</h4>
    <div class="row">
      <div class="col-md-6">
        <div class="info-box"><strong>Nama:</strong> Iqbal Ghozi Basyaasyah</div>
        <div class="info-box"><strong>Tanggal Lahir:</strong> 22 November 2007</div>
        <div class="info-box"><strong>Alamat:</strong> Surakarta, Jawa Tengah</div>
      </div>
      <div class="col-md-6">
        <div class="info-box"><strong>Email:</strong> iqbal.ghozi26@smk.belajar.id</div>
        <div class="info-box"><strong>No HP:</strong> 0857-1347-7727</div>
        <div class="info-box"><strong>Status:</strong> Pelajar</div>
      </div>
    </div>
  </div>

  <!-- Keahlian -->
  <div class="profile-section">
    <h4 class="section-title">Keahlian</h4>
    <div class="row text-center">
      <div class="col-md-4 mb-3">
        <div class="card card-skill py-4">
          <i class="bi bi-code-slash fs-2 text-info mb-2"></i>
          <h5 class="fw-semibold">Web Development</h5>
          <p class="small">Laravel, HTML, CSS, JavaScript, PHP</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card card-skill py-4">
          <i class="bi bi-palette fs-2 text-warning mb-2"></i>
          <h5 class="fw-semibold">UI/UX Design</h5>
          <p class="small">Figma, Wireframing, Prototyping</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card card-skill py-4">
          <i class="bi bi-database-fill fs-2 text-success mb-2"></i>
          <h5 class="fw-semibold">Database</h5>
          <p class="small">MySQL, ERD, Query Optimization</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Pendidikan -->
  <div class="profile-section">
    <h4 class="section-title">Pendidikan</h4>
    <ul class="list-group">
      <li class="list-group-item ps-0">
        <strong>SMK Negeri 5 Surakarta</strong> – Jurusan Pengembangan Perangkat Lunak Dan Gim(2023 - Sekarang)
      </li>
      <li class="list-group-item ps-0">
        <strong>SMP Negeri 23 Surakarta</strong> – (2019 - 2023)
      </li>
    </ul>
  </div>
</div>
@endsection
