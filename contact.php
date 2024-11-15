<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - online tutoring</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <?php include './parts/header.php'; ?> <!-- Include the header part of the page -->
    <section>
        <h2>Contact Us</h2> 
        <div>
        <form action="process.php" method="post"> <!-- Form to collect user contact information -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required> <!-- Input field for user's name -->
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required> <!-- Input field for user's email -->
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea> <!-- Textarea for user's message -->
            
            <input type="submit" value="Send Message"> <!-- Submit button for the form -->
        </form>
        </div>
    </section>
    <?php include './parts/footer.php'; ?> <!-- Include the footer part of the page -->

</body>
</html>