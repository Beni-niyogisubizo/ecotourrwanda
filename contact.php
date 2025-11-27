<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Contact form validation (server side)
if (
    empty($_POST['name']) ||
    empty($_POST['email']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ||
    empty($_POST['message'])
) {
    die("Invalid input. Please fill in all required fields with a valid email.");
}

    $pdo = new PDO("mysql:host=localhost;dbname=ecotourrwanda", "beni", "password");
    $stmt = $pdo->prepare("INSERT INTO contact_message (name, email, message) VALUES (?, ?, ?)");
    $stmt->execute([
        $_POST['name'], $_POST['email'], $_POST['message']
    ]);

    // SEND EMAIL TO THE CLIENT
    $to = $_POST['email'];
    $subject = "Thank you for contacting EcoTour Rwanda!";
    $message = "Dear " . $_POST['name'] . ",\n\n"
      . "Thank you for reaching out to EcoTour Rwanda. We have received your message:\n\n"
      . $_POST['message'] . "\n\n"
      . "Our team will get back to you soon.\n\n"
      . "Best regards,\nEcoTour Rwanda Team";
    $headers = "From: b.niyogisub@alustudent.com\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: index.php?contact=success");
    exit;
}
?>
