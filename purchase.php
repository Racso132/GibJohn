<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Package</title>
</head>
<body>
    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and retrieve form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $package = htmlspecialchars($_POST['package']);
        
        // Here you can add code to process the purchase, e.g. save to a database or send an email

        // Display a thank you message
        echo "<h2>Thank you for your purchase, $name!</h2>";
        echo "<p>You have successfully purchased the $package package.</p>";
    } else {  
    ?>
    <h1>Purchase Package</h1>
    <!-- Display the purchase form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br> 
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="package">Package:</label><br>
        <select id="package" name="package" required>
            <option value="free">free</option>
            <option value="Premium">Premium</option>
        </select><br><br>
        
        <input type="submit" value="Purchase">
    </form>
    <?php
    }
    ?>
</body>
</html>