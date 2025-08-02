<?php include('../includes/header.php'); ?> 
<div class="container my-5 text-dark">   
  <?php   
    include('../db/db.php');   
    $id = $_GET['id'];   
    $stmt = $conn->prepare("SELECT * FROM recipes WHERE id = ?");   
    $stmt->bind_param("i", $id);   
    $stmt->execute();   
    $result = $stmt->get_result();   
    $recipe = $result->fetch_assoc();   
  ?>   

  <h2 class="mb-3"><?php echo $recipe['title']; ?></h2>   
  <img src="../uploads/<?php echo $recipe['image']; ?>" 
     class="img-fluid recipe-img mb-4" 
     alt="Recipe Image" 
     style="height: 400px; width: 50%; object-fit: cover; border-radius: 10px;" />



  <h4>🧾 Ingredients</h4>   
  <ul class="ingredient-list mb-4">     
    <?php foreach (explode("\n", trim($recipe['ingredients'])) as $ingredient): ?>       
      <li><?php echo htmlspecialchars($ingredient); ?></li>     
    <?php endforeach; ?>   
  </ul>   

  <h4>👨‍🍳 Steps</h4>   
  <ol>     
    <?php foreach (explode("\n", trim($recipe['steps'])) as $step): ?>       
      <li><?php echo htmlspecialchars($step); ?></li>     
    <?php endforeach; ?>   
  </ol>   

  <a href="../user/order.php?recipe_id=<?php echo $recipe['id']; ?>" class="btn btn-success me-2">Order Now</a>   
  <a href="../user/recipes.php" class="btn btn-recipe">Back to Recipes</a> 
</div> 
<?php include('../includes/footer.php'); ?> 
