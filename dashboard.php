<?php
// Start the session
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['user']['id'])) {
    header("Location: login.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Dashboard - GibJohn tutoring</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include './parts/header.php'; ?>
        <section>
            <h2>Hello, <?php echo htmlspecialchars($_SESSION['user']['username']); ?>!</h2>
            <p>This is a protected page. Only logged-in users can access this dashboard.</p>
            <p>Feel free to explore exclusive content or manage your account here.</p>
            <p>For any questions or issues, please <a href="contact.php">contact us</a>.</p>
            <img src="">
        </section>
        <?php include './parts/footer.php'; ?>
    </body>
</html>
 
 

  