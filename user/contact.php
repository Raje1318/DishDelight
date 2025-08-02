<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('../img/contact.png') no-repeat center center/cover;
      height: 100vh;
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }

    .contact-section {
      padding: 4rem 2rem;
    }

    .card-box {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
      color: #2c3e50;
      height: 100%;
    }

    .btn-custom {
      background-color: #2c3e50;
      color: white;
    }

    .btn-custom:hover {
      background-color: #1a252f;
    }

    iframe {
      width: 100%;
      height: 80%;
      min-height: 400px;
      border: none;
      border-radius: 10px;
    }

    @media (max-width: 768px) {
      .row {
        flex-direction: column;
      }

      iframe {
        height: 300px;
      }
    }
  </style>
</head>
<body>

<div class="container contact-section">
  <div class="row g-4 align-items-stretch">
    <!-- Contact Form -->
    <div class="col-md-6 d-flex">
      <div class="card-box w-100">
        <h2>Contact Us</h2>
        <form action="../db/contact.php" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="user_name" placeholder="Username" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="user_email" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" rows="5" name="user_message" placeholder="Type your message here..." required></textarea>
          </div>
          <button type="submit" class="btn btn-custom w-100">Send Message</button>
        </form>
      </div>
    </div>

    <!-- Map -->
    <div class="col-md-6 d-flex">
      <div class="card-box w-100">
        <h2>📍 Our Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.486679370917!2d73.79789441107286!3d18.642144365375724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b8634815e185%3A0x61b2a188e0c07e9d!2sASM&#39;s%20IBMR%20Pune%20-%20Institute%20of%20Business%20Management%20and%20Research!5e0!3m2!1sen!2sin!4v1744631205215!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>

<?php include('../includes/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
