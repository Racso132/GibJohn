
<?php

// Include the header part of the page
include_once './parts/header.php';

// Create a new instance of the part_header class
new part_header("Contact Us");
?>


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

    
 

  