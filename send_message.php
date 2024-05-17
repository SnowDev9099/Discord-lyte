<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $message = $_POST['message'];

    // Code to send the message using your preferred method (e.g., email, database, etc.)

    echo "Message sent successfully!";
}
?>
