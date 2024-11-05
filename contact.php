<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - online tutoring</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include './parts/header.php'; ?>            
    <section>
        <h2>Contact Us</h2>
        <div>
        <form action="process.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <input type="submit" value="Send Message">
        </form>
            </div>
    </section>
    <?php include './parts/footer.php'; ?>

</body>
</html> 