<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Recipe Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836') no-repeat center center/cover;
      height: 100vh;
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }

    .navbar {
      background-color: rgba(0, 0, 0, 0.7);
    }

    .navbar-brand img {
      height: 40px;
    }

    .nav-link {
      color: white !important;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -6px;
      width: 0%;
      height: 2px;
      background-color: #ff5722;
      transition: width 0.3s ease;
    }
    .nav-link:hover {
      color: #ff5722 !important;
    }
    .hero-section {
      min-height: 90vh;
      display: flex;
      align-items: center;
    }

    .hero-text h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .hero-text p {
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
    }

    .btn-explore {
      background-color: #ff5722;
      border: none;
      padding: 10px 20px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .btn-explore:hover {
      background-color: #e64a19;
    }

    .hero-img img {
      max-width: 100%;
      border-radius: 20px;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .hero-img img:hover {
      transform: scale(1.05) rotate(-1deg);
    }

    @media (max-width: 768px) {
      .hero-text h1 {
        font-size: 2rem;
      }

      .hero-img {
        margin-top: 2rem;
      }
    }
  </style>
</head>
<body>

  
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Text -->
        <div class="col-md-6 hero-text">
          <h1>Welcome to DishDelight</h1>
          <p>Discover delicious, easy-to-make recipes for every occasion. From quick bites to family dinners — we’ve got something for every taste!</p>
          <a href="../user/recipes.php" class="btn btn-explore">Explore Recipes</a>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
