<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <title>@yield('title')</title>

    <style>
      body {
        font-family: 'Poppins', sans-serif;
        background-color: #121212;
        color: #e4e4e4;
      }

      .navbar {
        background: #1f1f1f;
        border-bottom: 1px solid #2c2c2c;
      }

      .navbar .navbar-brand,
      .navbar .nav-link {
        color: #ffffff !important;
      }

      .navbar .nav-link:hover {
        color: #0d6efd !important;
        text-decoration: underline;
      }

      .navbar .active {
        font-weight: bold;
        color: #0d6efd !important;
      }

      main.container {
        padding-top: 3rem;
        padding-bottom: 3rem;
      }

      footer {
        text-align: center;
        padding: 2rem 0;
        color: #aaa;
        border-top: 1px solid #2c2c2c;
        background-color: #1a1a1a;
      }

      .btn-outline-light {
        border-color: #ffffff;
        color: #ffffff;
      }

      .btn-outline-light:hover {
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: white;
      }
    </style>
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="/">
          <i class="bi bi-house-door-fill me-2"></i>ZeeWeb
        </a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link @if(Request::is('/')) active @endif" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(Request::is('about')) active @endif" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(Request::is('gallery')) active @endif" href="/gallery">Gallery</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="container">
      @yield('content')
    </main>

    <!-- Footer -->
    <footer>
      &copy; {{ date('Y') }} Iqbal Ghozi Basyaasyah. All rights reserved.
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
