<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './parts/header.php'; ?> <!-- Include the header part of the page -->
    <title>Revision Packages</title>
    <link rel="stylesheet" href="styles2.css"> <!-- Link to the external CSS file -->

</head>
<body>
    <h1>Revision Packages</h1>
    <div class="package">
        <h2>Free Package</h2>
        <p>Access to basic revision materials.</p>
        <p>Price: Free</p> 
        <a href="purchase.php?package=free" class="button">Get Free Package</a> <!-- Link to purchase the free package -->
    </div>
    <div class="package">
        <h2>Paid Package</h2>
        <p>Access to premium revision materials.</p>
        <p>Price: £12.99</p>
        <a href="purchase.php?package=paid" class="button">Buy Paid Package</a> <!-- Link to purchase the paid package -->
    </div>
</body>
</html>
