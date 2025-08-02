<?php include('../includes/header.php'); ?>

<div class="container my-5 text-dark">
  <h2 class="mb-4">➕ Add New Recipe</h2>
  <form action="../user/process_recipe.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title" class="form-label">Recipe Title</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Upload Image</label>
      <input type="file" class="form-control" id="image" name="image" required>
    </div>

    <div class="mb-3">
      <label for="ingredients" class="form-label">Ingredients (separate by line)</label>
      <textarea class="form-control" id="ingredients" name="ingredients" rows="5" required></textarea>
    </div>

    <div class="mb-3">
      <label for="steps" class="form-label">Steps (separate by line)</label>
      <textarea class="form-control" id="steps" name="steps" rows="6" required></textarea>
    </div>

    <div class="mb-3">
      <label for="title" class="form-label">Amount</label>
      <input type="text" class="form-control" id="title" name="amount" required>
    </div>
    <button type="submit" class="btn btn-recipe">Add Recipe</button>
  </form>
</div>

<?php include('../includes/footer.php'); ?>
