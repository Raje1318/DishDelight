<?php include('../includes/header.php'); ?>
<div class="container text-center my-5">
  <h2 class="text-success">✅ Order Placed Successfully!</h2>
  <p>Your order ID is: <strong><?php echo $_GET['id']; ?></strong></p>
  <p>Thank you for choosing Cash on Delivery. Your delicious meal is on its way!</p>
  <a href="../user/home.php" class="btn btn-primary mt-3">Go Back</a>
</div>
<?php include('../includes/footer.php'); ?>
