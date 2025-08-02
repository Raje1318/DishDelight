<?php include('../includes/header.php'); ?>
<div class="container my-5 text-dark">
  <h2 class="mb-4">🛒 Order Recipe</h2>
  <?php
include('../db/db.php');

$price_per_unit = 0;
$recipe = ['title' => ''];

if (isset($_GET['recipe_id'])) {
  $id = intval($_GET['recipe_id']);
  $result = $conn->query("SELECT title, amount FROM recipes WHERE id = $id");

  if ($result && $result->num_rows > 0) {
    $recipe = $result->fetch_assoc();
    $price_per_unit = $recipe['amount'];
  } else {
    echo "<div class='alert alert-danger'>Recipe not found!</div>";
  }
} else {
  echo "<div class='alert alert-warning'>No recipe ID provided!</div>";
}
?>

  <form action="order_process.php" method="POST" id="orderForm">
    <input type="hidden" name="recipe_id" value="<?php echo $id; ?>">
    <input type="hidden" id="price_per_unit" value="<?php echo $price_per_unit; ?>">
    <div class="mb-3">
      <label class="form-label">Recipe</label>
      <input type="text" class="form-control" name="item" value="<?php echo $recipe['title']; ?>" readonly>
    </div>
    <div class="mb-3">
      <label>Your Name</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
      <label>Address</label>
      <textarea class="form-control" name="address" rows="3" required></textarea>
    </div>
    <div class="mb-3">
      <label>Quantity</label>
      <input type="number" class="form-control" name="quantity" id="quantity" min="1" value="1" required>
    </div>
    <div class="mb-3">
      <label>Total Amount (₹)</label>
      <input type="text" class="form-control" id="total" readonly>
    </div>
    <div class="mb-3">
      <label>Payment Method</label><br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="payment" value="COD" required>
        <label class="form-check-label">Cash on Delivery</label>
      </div>
      
    </div>
    <button type="submit" class="btn btn-success">Place Order</button>
  </form>
</div>

<script>
  const qty = document.getElementById('quantity');
  const total = document.getElementById('total');
  const price = document.getElementById('price_per_unit').value;

  function updateTotal() {
    total.value = qty.value * price;
  }

  qty.addEventListener('input', updateTotal);
  updateTotal(); // Initial call
</script>
<?php include('includes/footer.php'); ?>
