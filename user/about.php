<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us - DishDelight</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
  

    .about-section {
      padding: 80px 0;
      background-color: #fff7f0;
    }

    .about-img {
      max-width: 100%;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      transition: transform 0.4s ease;
    }

    .about-img:hover {
      transform: scale(1.03);
    }

    .footer {
      background-color: #2c2c2c;
      color: white;
      padding: 40px 0;
    }

    .footer a {
      color: #ccc;
      text-decoration: none;
    }

    .footer a:hover {
      color: #ffffff;
    }

    .social-icons img {
      width: 32px;
      margin-right: 10px;
      transition: transform 0.3s ease;
    }

    .social-icons img:hover {
      transform: scale(1.2);
    }
  </style>
</head>
<body>

  <!-- About Section -->
  <section class="about-section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Image -->
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="../img/about.png" alt="About Us" class="about-img" />
        </div>
        <!-- Content -->
        <div class="col-md-6">
          <h2>About DishDelight</h2>
          <p>At DishDelight, we believe that cooking should be joyful and stress-free. Our mission is to bring you handpicked recipes that are delicious, easy to follow, and perfect for any occasion. Whether you're a kitchen newbie or a seasoned chef, we’ve got something for everyone!</p>
          <p>With a passion for flavors and a love for food, we aim to inspire your next meal. From global cuisines to everyday home cooking — discover your new favorite recipe here.</p>
          <a href="../user/recipes.php" class="btn btn-warning mt-3">Explore Recipes</a>
        </div>
      </div>
    </div>
  </section>

  <?php include('../includes/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
