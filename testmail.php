<?php
if(mail('b.niyogisub@alustudent.com', 'Test from XAMPP', 'This is a test email!', 'From: b.niyogisub@alustudent.com')) {
    echo "Mail sent!";
} else {
    echo "Mail failed!";
}
?>
