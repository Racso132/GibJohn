
<?php

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $package = isset($_POST['package']) ? $_POST['package'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Redirect to the receipt page with the form data
    header("Location: receipt.php?package=" . urlencode($package) . "&name=" . urlencode($name) . "&email=" . urlencode($email));
    exit();
}
?>