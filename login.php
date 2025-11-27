<?php
session_start();
$USER = "admin";
$PASS = "password"; // CHANGE THIS TO SOMETHING SECRET

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["username"] === $USER && $_POST["password"] === $PASS) {
        $_SESSION["logged_in"] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = "Invalid credentials!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - EcoTour Rwanda Admin</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container py-5">
  <h2>Admin Login</h2>
  <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
  <form method="POST" class="w-25">
    <div class="mb-3"><input type="text" name="username" class="form-control" placeholder="Username" required></div>
    <div class="mb-3"><input type="password" name="password" class="form-control" placeholder="Password" required></div>
    <button type="submit" class="btn btn-success w-100">Login</button>
  </form>
</div>
</body>
</html>

