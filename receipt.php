
<?php

// Include the header part of the page
include_once './parts/header.php';

// Get the form data from the query string
$package = isset($_GET['package']) ? $_GET['package'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';

// Create a new instance of the part_header class
new part_header("Receipt");

?>
<section>
<h1>Receipt</h1>
    <p>Thank you for your purchase, <?php echo htmlspecialchars($name); ?>.</p>
    <p>You have purchased the <?php echo htmlspecialchars($package); ?> package.</p>
    <p>A confirmation email has been sent to <?php echo htmlspecialchars($email); ?>.</p>
</section>  