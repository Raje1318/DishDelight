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
      <li><i class="fas fa-tachometer-alt"></i> Dashboard</li>
      <li><i class="fas fa-users"></i> Users</li>
      <li><i class="fas fa-utensils"></i> Recipes</li>
      <li><i class="fas fa-shopping-cart"></i> Orders</li>
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

    <div class="card-section mt-4">
      <div class="card-box">
        <h4><?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'dishdelight');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get counts
$userCount = $conn->query("SELECT COUNT(*) AS count FROM register")->fetch_assoc()['count'];
?></h4>
<h4><?php echo $userCount; ?></h4>
        <p>Users</p>
      </div>
      <div class="card-box">
        <h4><?php
// Database connection
 include('../db/db.php'); 
// Get counts

$orderCount = $conn->query("SELECT COUNT(*) AS count FROM orders")->fetch_assoc()['count'];

?></h4>
<h4><?php echo $orderCount; ?></h4>
        <p>Orders</p>
      </div>
      <div class="card-box">
        <h4><?php
// Database connection
include('../db/db.php'); 

// Get counts
$recipeCount = $conn->query("SELECT COUNT(*) AS count FROM recipes")->fetch_assoc()['count'];
?></h4>
<h4><?php echo $recipeCount; ?></h4>
        <p>Recipes</p>
      </div>
    </div>

    <div class="text-center">
      <a href="../admin/admin.php"><button class="btn btn-pink">Add User</button></a>
      <a href="../admin/remove_user.php"><button class="btn btn-danger">Remove User</button></a>
    </div>

    <div class="d-flex justify-content-center">
      <div class="form-box">
        <h5>Remove <span style="color: #ec407a">User</span></h5>
        <?php
// Fetch users
$result = $conn->query("SELECT user_id,user_name,user_email,user_pass FROM register");
?>
<table class="table">
  <thead>
    <tr>
      <th>Username</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?php echo $row['user_name']; ?></td>
      <td><?php echo $row['user_email']; ?></td>
      <td>
        <form method="post" action="../admin/delete_user.php">
          <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

      </div>
    </div>
  </div>
</body>
</html>
