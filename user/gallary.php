<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', sans-serif;
        background: #f2f2f2;
      }
      
      .gallery-container {
        margin: 0;
        padding: 0;
        background: #f2f2f2;
        text-align: center;
        padding: 40px 20px;
      }
      
      .gallery-container h1 {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 40px;
      }
      
      .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 25px;
        padding: 0 20px;
        max-width: 1200px;
        margin: auto;
      }
      
      .card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
        background-color: #fff;
      }
      
      .card img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
      }
      
      .card-info {
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        width: 100%;
        color: #fff;
        padding: 15px;
        text-align: center;
        font-size: 1.1rem;
        transition: background 0.3s ease;
      }
      
      .card:hover {
        transform: translateY(-10px);
      }
      
      .card:hover img {
        transform: scale(1.1);
      }
      
      .card:hover .card-info {
        background: rgba(0, 0, 0, 0.8);
      }
     
      .btn-explore {
        background-color: #ff5722;
        border: none;
        margin-top: 2rem;
        margin-left: 10rem;
        padding: 10px 20px;
        font-weight: bold;
        transition: background-color 0.3s ease;
      }
      .btn-explore:hover {
        background-color: #e64a19;
      }
  
  </style>
</head>
<body>


  <div class="gallery-container">
    <h1>Photo Gallery</h1>
    <div class="gallery-grid">
      <div class="card">
        <img src="../img/gallary1.png" alt="paneer butter masala">
        <div class="card-info">Paneer Butter Masala</div>
      </div>
      <div class="card">
        <img src="../img/gallary2.png" alt="chicken">
        <div class="card-info">Spanish Style Pulled Chicken</div>
      </div>
      <div class="card">
        <img src="../img/gallary3.png" alt="Salad">
        <div class="card-info">Fruit Salad</div>
      </div>
      <div class="card">
        <img src="../img/gallary4.png" alt="egg muffins">
        <div class="card-info">Egg Muffins</div>
      </div>
      <div class="card">
        <img src="../img/gallary5.png" alt="pillsburry crecent roll">
        <div class="card-info">Pillsburry Crecent Roll</div>
      </div>
      <div class="card">
        <img src="../img/gallary6.png" alt="pan fried noodles">
        <div class="card-info">Pan Fried Noodles</div>
      </div>
      <div class="card">
        <img src="../img/gallary7.png" alt="greek salad">
        <div class="card-info">Greek Salad</div>
      </div>
      <div class="card">
        <img src="../img/gallary8.png" alt="pizza">
        <div class="card-info">Margheritta Pizza</div>
      </div>
    </div>
    <a href="../home.html" class="btn btn-explore">Back</a>
  </div>

</body>
</html>
<?php include('../includes/footer.php'); ?>