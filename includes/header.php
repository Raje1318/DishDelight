<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DishDelight</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
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
      position: relative;
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

    .nav-link:hover::after {
      width: 100%;
    }

    .container {
      max-width: 1200px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://img.icons8.com/ios-filled/50/ffffff/chef-hat.png" alt="Logo" />
      <span class="text-white ms-2">DishDelight</span>
    </a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav text-end">
        <li class="nav-item"><a class="nav-link" href="../user/home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="../user/recipes.php">Recipes</a></li>
        <li class="nav-item"><a class="nav-link" href="../user/about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="../user/gallary.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="../user/contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="../admin/admin_login.php">Admin</a></li>
        <li class="nav-item"><a class="nav-link" href="../user/logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
        </body>
        </html>