@extends('layout')

@section('title', 'Home Page')

@section('content')
<style>
  body {
    background: linear-gradient(135deg, #0f0f1a, #1e1e2f);
    color: #e0e0e0;
    font-family: 'Segoe UI', sans-serif;
  }

  .hero-section {
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .welcome-box {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
    padding: 3rem;
    border-radius: 1rem;
    box-shadow: 0 0 30px rgba(0,0,0,0.3);
    text-align: center;
    border: 1px solid rgba(255,255,255,0.1);
  }

  .welcome-box h1 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #00adb5;
    margin-bottom: 1rem;
  }

  .welcome-box p {
    font-size: 1.2rem;
    color: #cccccc;
  }

  .summary-box {
    margin-top: 3rem;
    padding: 2rem;
    border-radius: 1rem;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 0 20px rgba(0,255,255,0.05);
  }

  .summary-box h3 {
    color: #00fff5;
    margin-bottom: 1rem;
    font-weight: 600;
  }

  .summary-box p {
    color: #ccc;
    line-height: 1.6;
  }

  .btn-custom {
    margin-top: 2rem;
    background-color: #00adb5;
    border: none;
    color: #fff;
    padding: 0.75rem 2rem;
    border-radius: 2rem;
    transition: background 0.3s;
  }

  .btn-custom:hover {
    background-color: #007f88;
  }
</style>

<div class="container hero-section">
  <div class="welcome-box">
    <h1>Selamat Datang di Website Saya</h1>
    <p>Sebuah platform sederhana untuk memamerkan karya dan pembelajaran saya dalam dunia web development dan UI/UX.</p>
    <a href="/about" class="btn btn-custom">Pelajari Lebih Lanjut</a>
  </div>
</div>

<div class="container summary-box">
  <h3>Ringkasan Tentang Saya</h3>
  <p>
    Saya adalah seorang pelajar yang antusias dalam bidang teknologi, khususnya desain antarmuka pengguna (UI) dan pengembangan web (frontend). 
    Dengan menggunakan HTML, CSS, Laravel, dan Bootstrap, saya berusaha menciptakan tampilan web yang modern, responsif, dan menarik.
    Tujuan saya adalah terus belajar dan meningkatkan kemampuan desain serta logika pemrograman.
  </p>
</div>
@endsection
