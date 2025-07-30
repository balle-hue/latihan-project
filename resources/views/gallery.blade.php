@extends('layout')

@section('title', 'Gallery')

@section('content')
<style>
  body {
    background: linear-gradient(135deg, #0d0d1a, #1a1a2e);
    color: #e0e0e0;
    font-family: 'Segoe UI', sans-serif;
  }

  .gallery-section {
    background: rgba(255, 255, 255, 0.04);
    border-radius: 1rem;
    padding: 3rem 2rem;
    margin-bottom: 3rem;
    box-shadow: 0 0 50px rgba(0, 255, 255, 0.08);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.06);
    transition: all 0.3s ease;
  }

  .gallery-section:hover {
    box-shadow: 0 0 70px rgba(0, 255, 255, 0.15);
  }

  .gallery-title {
    font-weight: bold;
    font-size: 2.7rem;
    margin-bottom: 2.5rem;
    text-align: center;
    color: #00ffe0;
    text-shadow: 0 1px 12px rgba(0,255,255,0.3);
    letter-spacing: 1px;
  }

  .gallery-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.07);
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .gallery-card:hover {
    transform: scale(1.03);
    box-shadow: 0 14px 40px rgba(0, 255, 255, 0.2);
  }

  .gallery-img {
    width: 100%;
    height: 340px;
    object-fit: cover;
    display: block;
  }

  @media (max-width: 768px) {
    .gallery-img {
      height: 240px;
    }
  }

  @media (max-width: 576px) {
    .gallery-img {
      height: 200px;
    }
  }
</style>

<div class="container py-5">
  <div class="gallery-section">
    <h3 class="gallery-title">Gallery Foto</h3>
    <div class="row g-4">
      @php
        $images = ['uioo.jpg', 'uioo1.jpg', 'uioo2.jpg', 'uioo10.jpg', 'uioo4.jpg', 'uioo5.jpg', 'uioo9.jpg', 'uioo7.jpg', 'uioo11.jpg'];
      @endphp

      @foreach($images as $img)
      <div class="col-md-6 col-lg-4">
        <div class="gallery-card">
          <img src="{{ asset('foto/' . $img) }}" class="gallery-img" alt="Gallery Image">
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
