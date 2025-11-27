<?php
session_start();
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit;
}
if (isset($_GET['export']) && $_GET['export'] === 'bookings') {
    $pdo = new PDO("mysql:host=localhost;dbname=ecotourrwanda", "beni", "password");
    $stmt = $pdo->query("SELECT * FROM booking ORDER BY created_at DESC");
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename="bookings.csv"');
    echo "Name,Email,Phone,Service,Details,Created At\n";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '"' . implode('","', array_map('addslashes', [
            $row['name'], $row['email'], $row['phone'], $row['service'], $row['details'], $row['created_at']
        ])) . "\"\n";
    }
    exit;
}

$pdo = new PDO("mysql:host=localhost;dbname=ecotourrwanda", "beni", "password");?>

// Bookings

<a href="admin.php?export=bookings" class="btn btn-primary mb-3">Export Bookings (CSV)</a>
<!-- Simple Upcoming Bookings Table -->
<table class="table table-striped">
    <thead>
        <tr>
            <th>Date/Time</th>
            <th>Name</th>
            <th>Service</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($bookings as $b): ?>
        <tr>
            <td><?= htmlspecialchars($b['created_at']) ?></td>
            <td><?= htmlspecialchars($b['name']) ?></td>
            <td><?= htmlspecialchars($b['service']) ?></td>
            <td><?= htmlspecialchars($b['email']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
$stmt = $pdo->query("SELECT * FROM booking ORDER BY created_at DESC");
$bookings = $stmt->fetchAll();

// Contact Messages
$stmt2 = $pdo->query("SELECT * FROM contact_message ORDER BY created_at DESC");
$contacts = $stmt2->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EcoTour Rwanda Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-success">
  <div class="container">
    <span class="navbar-brand mb-0 h1">EcoTour Rwanda Admin Dashboard</span>
    <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
  </div>
</nav>

<div class="container py-5">
  <h2>Bookings</h2>
  <table class="table table-bordered">
    <thead><tr>
      <th>Name</th><th>Email</th><th>Phone</th><th>Service</th><th>Details</th><th>Booked At</th>
    </tr></thead>
    <tbody>
      <?php foreach($bookings as $b): ?>
      <tr>
        <td><?= htmlspecialchars($b['name']) ?></td>
        <td><?= htmlspecialchars($b['email']) ?></td>
        <td><?= htmlspecialchars($b['phone']) ?></td>
        <td><?= htmlspecialchars($b['service']) ?></td>
        <td><?= htmlspecialchars($b['details']) ?></td>
        <td><?= htmlspecialchars($b['created_at']) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <h2>Contact Messages</h2>
  <table class="table table-bordered">
    <thead><tr>
      <th>Name</th><th>Email</th><th>Message</th><th>Received At</th>
    </tr></thead>
    <tbody>
      <?php foreach($contacts as $c): ?>
      <tr>
        <td><?= htmlspecialchars($c['name']) ?></td>
        <td><?= htmlspecialchars($c['email']) ?></td>
        <td><?= htmlspecialchars($c['message']) ?></td>
        <td><?= htmlspecialchars($c['created_at']) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<footer class="bg-success text-white text-center py-3 mt-5">
  &copy; <?php echo date('Y'); ?> EcoTour Rwanda - Admin
</footer>

</body>
</html>
