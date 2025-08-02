<?php
// Start session and include DB connection
session_start();
$conn = new mysqli("localhost", "root", "", "dishdelight");

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch users
$sql = "SELECT user_id, user_name, user_email FROM register";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List - DishDelight Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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


<div class="container mt-5">
    <h2 class="mb-4">Registered Users</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row["user_id"] ?></td>
                    <td><?= $row["user_name"] ?></td>
                    <td><?= $row["user_email"] ?></td>
                    <td>
                        <form action="delete_user.php" method="POST" onsubmit="return confirm('Are you sure?');">
                            <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>">
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="4" class="text-center">No users found</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
