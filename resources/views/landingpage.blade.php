<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Landing Page - {{ config('app.name', 'La Patisserie') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'DM Sans', sans-serif; background: #fdf8f3; color: #5a4632; }
    .navbar { background: #fdf8f3; }
    .navbar-brand { font-weight: 500; color: #5a4632; font-size: 1.8rem; } /* logo 3x lebih besar */
    .navbar-brand img { height: 90px; } /* logo image dibesarkan */
    .nav-link { color: #5a4632; font-weight: 500; }
    .nav-link:hover { color: #a67c52; }
    .btn-login { background: #5a4632; color: #fff; border-radius: 6px; padding: 6px 14px; }
    .hero {
      display: flex; align-items: center; justify-content: space-between;
      padding: 4rem 2rem; min-height: 90vh; /* tinggi 72vh */
    }
    .hero-text { max-width: 50%; font-family: 'Playfair Display', serif; }
    .hero-text h1 { font-size: 3.5rem; font-weight: 700; }
    .hero-text p { font-size: 1.2rem; margin: 1rem 0; font-family: 'DM Sans', sans-serif; }
    .hero-buttons .btn { margin-right: 10px; }
    .hero-img { max-width: 60%; /* diperbesar 2x dari sebelumnya (45% → 90%) */
      border-radius: 12px; overflow: hidden; position: relative; }
    .overlay-box {
      position: absolute; bottom: 15px; left: 15px;
      background: rgba(255,255,255,0.9); padding: 10px 14px;
      border-radius: 8px; font-size: 0.9rem; color: #5a4632;
    }
  .fade-section {
  opacity: 0;
  transition: opacity 0.6s ease; /* transisi halus */
}

.fade-section.visible {
  opacity: 1;
}

#heroImage {
  transition: transform 0.3s ease, filter 0.3s ease; /* transisi halus */
}
   #heroImage:hover {
  animation-name: pulse;
  animation-duration: 1s;
  
  transform: scale(1.05); /* zoom halus */
}
  </style>
</head>
<body>

  <!-- Navbar -->
<nav class="navbar navbar-expand-lg border-bottom border-dark px-4">
  <div class="container"> <!-- gunakan container biasa -->
    <!-- Toggle mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapse area -->
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <!-- Brand kiri -->
      <a class="navbar-brand fw-bold" href="/">
        <img src="/images/logo.png" alt="Logo" style="height:100px;" class="me-2">
        
      </a>

      <!-- Menu tengah -->
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
        <li class="nav-item"><a class="nav-link" href="#store">Store</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
      </ul>

      <!-- Cart + Login kanan -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/cart"><i class="bi bi-cart"></i> Cart</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-login ms-2" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



  <!-- Hero Section -->
  <section class="hero container">
  <div class="hero-text">
    <p class="text-muted">Est. 1952</p>
    <h1 id="animatedText1">Artisan Baked </h1>
    <h1 id="animatedText2">With Love </h1>
    <p>Experience the timeless art of French patisserie. Every croissant, every baguette, crafted with passion and perfection.</p>
    <div class="hero-buttons">
      <a href="#menu" class="btn btn-outline-dark">Explore Our Menu</a>
      <a href="#store" class="btn btn-dark">Visit Store</a>
    </div>
  </div>
  <div class="hero-img">
  <img src="/images/depan.jpg" 
       alt="Fresh Croissants" 
       class="img-fluid animate__animated animate__fadeIn" 
       id="heroImage">
  <div class="overlay-box">
    <strong>Daily Fresh</strong><br>
    Baked every morning at 5 AM with premium ingredients.
  </div>
</div>

</section>

  <!-- Signature Selection -->
<section class="py-5 bg-light fade-section" id="menu">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">OUR SIGNATURE SELECTION</h2>
    <p class="text-muted mb-5">Today's Favorites</p>

    <div class="row g-4">
      <!-- Classic Croissant -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/croissant.jpg" class="card-img-top" alt="Classic Croissant">
          <div class="card-body">
            <h5 class="card-title">Classic Croissant</h5>
            <p class="card-text">Buttery, flaky perfection.</p>
            <p class="fw-bold">$4.50</p>
            <a href="/cart/add/croissant" class="btn btn-outline-dark btn-sm">Add to Cart</a>
          </div>
        </div>
      </div>

      <!-- Artisan Baguette -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/baguette.jpg" class="card-img-top" alt="Artisan Baguette">
          <div class="card-body">
            <h5 class="card-title">Artisan Baguette</h5>
            <p class="card-text">Crispy crust, airy inside.</p>
            <p class="fw-bold">$5.00</p>
            <a href="/cart/add/baguette" class="btn btn-outline-dark btn-sm">Add to Cart</a>
          </div>
        </div>
      </div>

      <!-- Pain au Chocolat -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/pain-au-chocolat.jpg" class="card-img-top" alt="Pain au Chocolat">
          <div class="card-body">
            <h5 class="card-title">Pain au Chocolat</h5>
            <p class="card-text">Rich chocolate wrapped in pastry.</p>
            <p class="fw-bold">$5.50</p>
            <a href="/cart/add/chocolat" class="btn btn-outline-dark btn-sm">Add to Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- Bootstrap JS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
<script>
  const fadeSections = document.querySelectorAll('.fade-section');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible', 'animate__animated', 'animate__fadeIn');
      } else {
        entry.target.classList.remove('visible', 'animate__fadeIn');
      }
    });
  }, { threshold: 0.2 });

  fadeSections.forEach(section => {
    observer.observe(section);
  });
</script>


</body>
</html>
