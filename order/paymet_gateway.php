<?php include('../includes/header.php'); ?>
<div class="container my-5 text-dark">
  <h2 class="mb-4">💳 Pay via QR Code</h2>

  <?php
    include('../db/db.php');

    if (isset($_GET['order_id'])) {
      $order_id = intval($_GET['order_id']);
      $result = $conn->query("SELECT r.title, o.total_amount FROM orders o JOIN recipes r ON o.recipe_id = r.id WHERE o.id = $order_id");

      if ($result && $result->num_rows > 0) {
        $order = $result->fetch_assoc();
      } else {
        echo "<div class='alert alert-danger'>Order not found!</div>";
        include('../includes/footer.php');
        exit;
      }
    } else {
      echo "<div class='alert alert-warning'>No order ID provided!</div>";
      include('../includes/footer.php');
      exit;
    }
  ?>

  <p><strong>Recipe:</strong> <?php echo htmlspecialchars($order['title']); ?></p>
  <p><strong>Amount to Pay:</strong> ₹<?php echo number_format($order['amount'], 2); ?></p>

  <h4 class="mt-4">📲 Scan & Pay</h4>
  <p>Use any UPI app to scan and pay the amount below:</p>
  
  <div class="text-center">
    <img src="../images/qr-code.png" alt="QR Code" class="img-fluid" style="max-width:300px;" />
  </div>

  <p class="mt-3">After payment, please wait while your order is processed. No need to click any button.</p>
</div>
<?php include('../includes/footer.php'); ?>
