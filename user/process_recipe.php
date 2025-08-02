<?php
include('../db/db.php'); // create db.php for DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $ingredients = nl2br(htmlspecialchars($_POST['ingredients']));
  $steps = nl2br(htmlspecialchars($_POST['steps']));

  $imageName = $_FILES['image']['name'];
  $tempName = $_FILES['image']['tmp_name'];
  $uploadDir = "../uploads/" . basename($imageName);

  if (move_uploaded_file($tempName, $uploadDir)) {
    $sql = "INSERT INTO recipes (title, image, ingredients, steps) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $title, $imageName, $ingredients, $steps);
    if ($stmt->execute()) {
      header("Location: ../user/recipes.php?success=1");
      exit();
    } else {
      echo "Error saving recipe.";
    }
  } else {
    echo "Failed to upload image.";
  }
}
?>
