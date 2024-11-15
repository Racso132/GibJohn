<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    

    echo "<h1>Thank you, " . $name . "!</h1>";
    echo "<p>Your message has been received. We'll get back to you at " . $email . " soon.</p>";
    echo "<p>Your message: " . $message . "</p>";
}
?>