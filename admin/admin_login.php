<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Direct/hardcoded credentials
    $admin_email = "admin@dishdelight.com";
    $admin_password = "admin123";

    if ($email === $admin_email && $password === $admin_password) {
        $_SESSION["admin_logged_in"] = true;
        header("Location: ../admin/admin.php"); // Redirect to dashboard
        exit;
    } else {
        $error = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(120deg, #a18cd1, #fbc2eb);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }
    .login-box {
      background-color: white;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }
    .login-box h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
      color: #8e44ad;
    }
    .btn-login {
      background-color: #8e44ad;
      color: white;
      font-weight: bold;
      transition: 0.3s ease;
    }
    .btn-login:hover {
      background-color: #732d91;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #8e44ad;
    }
    .error-msg {
      color: red;
      font-size: 0.9rem;
      margin-bottom: 15px;
      text-align: center;
    }
  </style>
</head>
<body>

<div class="login-box">
  <h2>Admin Login</h2>
  <?php if ($error): ?>
    <div class="error-msg"><?= $error ?></div>
  <?php endif; ?>
  <form method="post">
    <div class="mb-3">
      <label for="email" class="form-label">Admin Email</label>
      <input type="email" class="form-control" name="email" required placeholder="Enter email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" required placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-login w-100">Login</button>
  </form>
</div>

</body>
</html>
