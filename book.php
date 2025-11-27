<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Booking form validation (server side)
if (
    empty($_POST['name']) ||
    empty($_POST['email']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ||
    empty($_POST['service'])
) {
    die("Invalid input. Please fill in all required fields with a valid email.");
}

    $pdo = new PDO("mysql:host=localhost;dbname=ecotourrwanda", "beni", "password");
    $stmt = $pdo->prepare("INSERT INTO booking (name, email, phone, service, details) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['service'], $_POST['details']
    ]);

    // === SEND EMAIL CONFIRMATION ===
    $to = $_POST['email'];
    $subject = "EcoTour Rwanda Booking Confirmation";
    $message = "Dear " . $_POST['name'] . ",\n\n"
      . "Thank you for booking '" . $_POST['service'] . "' with EcoTour Rwanda!\n\n"
      . "We have received your request and will follow up with more information soon.\n\n"
      . "If you have any questions, just reply to this email.\n\n"
      . "Best regards,\nEcoTour Rwanda Team";
    $headers = "From: b.niyogisub@alustudent.com\r\n";

    mail($to, $subject, $message, $headers);

    // Send alert to admin
$adminTo = "b.niyogisub@alustudent.com";
$adminSubject = "New Booking on EcoTour Rwanda";
$adminMessage = "A new booking has been placed:\n\n"
  . "Name: " . $_POST['name'] . "\n"
  . "Email: " . $_POST['email'] . "\n"
  . "Phone: " . $_POST['phone'] . "\n"
  . "Service: " . $_POST['service'] . "\n"
  . "Details: " . $_POST['details'];
mail($adminTo, $adminSubject, $adminMessage, $headers);


    header("Location: index.php?book=success");
    exit;
}
?>
