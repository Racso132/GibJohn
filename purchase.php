<?php
    // Include the header part of the page
    include_once './parts/header.php';

    // Get the selected package from the query string
    $selected_package = isset($_GET['package']) ? $_GET['package'] : '';

    // Get the price from the query string
    $price = isset($_GET['price']) ? $_GET['price'] : '';

    // Create a new instance of the part_header class
    new part_header("Purchase Package");
    ?>
<section>
    <h1>Purchase Package</h1>
    <p>You have selected the <?php echo htmlspecialchars($selected_package); ?> package.</p>
    <p>Price: <?php echo htmlspecialchars($price); ?></p>
    <p>Please fill in your details to complete the purchase.</p>
</section>
<section>
    <form action="process_purchase.php" method="post">
        <input type="hidden" name="package" value="<?php echo htmlspecialchars($selected_package); ?>">
        <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit" class="button">Complete Purchase</button>
    </form>
</section>
