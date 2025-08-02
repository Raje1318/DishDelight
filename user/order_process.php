<?php
include('../db/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $recipe_id = $_POST['recipe_id'];
  $item = $_POST['item'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $quantity = $_POST['quantity'];
  $payment = $_POST['payment'];
  $total = $quantity * 200;

  $stmt = $conn->prepare("INSERT INTO orders (recipe_id, customer_name, address, quantity, total_amount, payment_method, item) VALUES (?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("issidss", $recipe_id, $name, $address, $quantity, $total, $payment, $item);

  if ($stmt->execute()) {
    $order_id = $conn->insert_id;
    if ($payment == "COD") {
      header("Location: ../order/order_success.php?method=COD&id=$order_id");
    } else {
      header("Location: ../order/payment_gateway.php?id=$order_id");
    }
  } else {
    echo "Something went wrong.";
  }
}
?>
