

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DishDelight Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: #f6f6f6;
    }
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 240px;
      background: linear-gradient(45deg, #ab47bc, #ec407a);
      color: white;
      padding-top: 20px;
    }
    .sidebar h4 {
      text-align: center;
      margin-bottom: 2rem;
      font-weight: bold;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    .sidebar ul li {
      padding: 15px 20px;
      cursor: pointer;
    }
    .sidebar li a{
      text-decoration: none;
      all: unset;
    }
    .sidebar ul li:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }
    .sidebar ul li i {
      margin-right: 10px;
    }
    .content {
      margin-left: 240px;
      padding: 20px;
    }
    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #fff;
      padding: 10px 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .card-box {
      background: linear-gradient(45deg, #ef5350, #ec407a);
      color: white;
      border-radius: 12px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
    .btn-pink {
      background-color: #ec407a;
      color: white;
      border: none;
      padding: 10px 20px;
      margin: 10px;
    }
    .card-section {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }
    .card-section .card-box {
      flex: 1;
      min-width: 200px;
    }
    .form-box {
      background: white;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 350px;
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h4><i class="fas fa-desktop"></i> DishDelight</h4>
    <ul>
      <li><i class="fas fa-tachometer-alt"></i> <a href="../admin/admin.php">Dashboard</a></li>
     <li><i class="fas fa-users"></i><a href="../admin/user_list.php">Users</a></li>
      <li><i class="fas fa-utensils"></i><a href="../admin/recipe_list.php"> Recipes</a></li>
      <li><i class="fas fa-shopping-cart"><a href="../admin/orders_list.php"></i> Orders</a></li>
      <li><i class="fas fa-sign-out-alt"></i> Logout</li>
    </ul>
  </div>
  <div class="content">
    <div class="topbar">
      <h4>Dashboard</h4>
      <div>
        <img src="https://img.icons8.com/fluency/48/user-male-circle.png" style="width: 40px; margin-right: 10px;">
        <strong>Admin</strong>
      </div>
    </div>

    <?php
include '../db/db.php'; // your DB connection file

$query = "SELECT * FROM orders ORDER BY order_id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DishDelight Orders</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f7f7f7;
    }
    .table {
      background-color: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .btn-cancel {
      background-color: #f44336;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
    }
    .btn-cancel:hover {
      background-color: #d32f2f;
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <h2 class="mb-4">All Orders</h2>
    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Items</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Payment Method</th>
          <th>Order Date</th>
          
        </tr>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?= $row['order_id'] ?></td>
            <td><?= htmlspecialchars($row['customer_name']) ?></td>
            <td><?= htmlspecialchars($row['address']) ?></td>
            <td><?= htmlspecialchars($row['item']) ?></td>
            <td><?= $row['quantity'] ?></td>
            <td>₹<?= $row['total_amount'] ?></td>
            <td><?= $row['payment_method'] ?></td>
            <td><?= $row['order_date'] ?></td>
            
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>


</body>
</html>