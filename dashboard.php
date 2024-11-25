<?php
// Start the session
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['user']['id'])) {
    header("Location: login.html");
    exit;
}

include_once './parts/header.php';

new part_header("Dashboard");
?>
 

<section>
    <h2>Hello, <?php echo htmlspecialchars($_SESSION['user']['username']); ?>!</h2> 
    <img class="learning_together" src="learning_together.png">
        <h3>Learning Together</h3>
        <p>Our mission is to help you with your learning and revision needs. We aim to provide you with the best resources and tools to help you succeed in your studies.</p>
        <p>Our team of experts are dedicated to helping you achieve your goals and reach your full potential.</p>
        <p>We are committed to providing you with the best possible service and support to help you succeed in your studies.</p>
    <p>This is a protected page. Only logged-in users can access this dashboard.</p>
    <p>Feel free to explore exclusive content or manage your account here.</p>
    <p>For any questions or issues, please <a href="contact.php">contact us</a>.</p>
    <a href="https://forms.office.com/Pages/DesignPageV2.aspx?origin=NeoPortalPage&subpage=design&id=d58slY5gsk-aB_5mmDuZZ6MHKE8_adFGtZDCCHhZznpURDVCSkEySkdMN1hBTUxBNFpENklDVEpZWS4u">form</a>
</section>
</div>
<?php include './parts/footer.php'; ?> 