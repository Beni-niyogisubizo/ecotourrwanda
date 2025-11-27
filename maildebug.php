<?php
$to = "b.niyogisub@alustudent.com";
$subject = "Test mail with debug";
$message = "Testing advanced debug";
$headers = "From: b.niyogisub@alustudent.com\r\n";

$result = mail($to, $subject, $message, $headers);

if ($result) {
    file_put_contents("maildebug.log", "mail() returned TRUE\n", FILE_APPEND);
    echo "mail() returned TRUE";
} else {
    file_put_contents("maildebug.log", "mail() returned FALSE\n", FILE_APPEND);
    echo "mail() returned FALSE";
}
?>
