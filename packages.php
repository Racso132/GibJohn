<?php

// Include the header part of the page
include_once './parts/header.php';

// Create a new instance of the part_header class
new part_header("packages");
?>


    <h1>Revision Packages</h1>
    <div class="package">
        <h2>Free Package</h2>
        <p>Access to basic revision materials.</p>
        <p>Price: Free</p> 
        <form action="purchase.php" method="get">
            <input type="hidden" name="package" value="free">
            <input type="hidden" name="price" value="Free">
            <button type="submit" class="button">Get Free Package</button>
        </form>
    </div>
    <div class="package">
        <h2>Paid Package</h2>
        <p>Access to premium revision materials.</p>
        <p>Price: £12.99</p>
        <form action="purchase.php" method="get">
            <input type="hidden" name="package" value="paid">
            <input type="hidden" name="price" value="£12.99">
            <button type="submit" class="button">Buy Paid Package</button>
        </form>
    </div>




