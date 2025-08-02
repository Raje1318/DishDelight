<?php include('../includes/header.php'); ?>
<div class="container my-5 text-dark">
  <h2 class="mb-4">📖 All Recipes</h2>
  <div class="row g-4">
    <?php
    include('../db/db.php');
    $result = $conn->query("SELECT * FROM recipes ORDER BY id DESC");
    while ($row = $result->fetch_assoc()):
    ?>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card h-100 w-100 shadow-sm">
          <img src="../uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="Recipe Image" style="height: 200px; object-fit: cover;">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title"><?php echo $row['title']; ?></h5>
            <a href="view_recipe.php?id=<?php echo $row['id']; ?>" class="btn btn-recipe mt-3">View Recipe</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
<?php include('../includes/footer.php'); ?>
