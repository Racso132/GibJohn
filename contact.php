<?php

// Include the header part of the page
include_once './parts/header.php';

// Create a new instance of the part_header class
new part_header("Contact Us");
?> 
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
</section> <!-- End of the contact section -->
<?php include './parts/footer.php'; ?> <!-- Include the footer part of the page -->
