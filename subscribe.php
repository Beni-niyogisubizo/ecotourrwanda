<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (
        empty($_POST['email']) ||
        !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
    ) {
        die("Invalid input. Please provide a valid email.");
    }

    $email = $_POST['email'];

    // same DB connection style as book.php
    $pdo = new PDO(
        "mysql:host=localhost;dbname=ecotourrwanda",
        "beni",
        "password"
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Save to DB (ignore if already subscribed)
    $stmt = $pdo->prepare(
        "INSERT IGNORE INTO newsletter_subscribers (email) VALUES (?)"
    );
    $stmt->execute([$email]);

    // Send confirmation email
    $to = $email;
    $subject = "EcoTour Rwanda Newsletter Subscription";
    $message = "Hello,\n\n"
        . "Thank you for subscribing to EcoTour Rwanda email updates.\n"
        . "You will receive news about eco-tours, conservation, and special offers.\n\n"
        . "Best regards,\nEcoTour Rwanda Team";
    $headers = "From: b.niyogisub@alustudent.com\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: index.php?subscribe=success");
    exit;
}
?>
