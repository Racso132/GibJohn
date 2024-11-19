<?php
session_start();

// Assuming user data is stored in session
$user = $_SESSION['user'];


// If user is not logged in, redirect to login page
if (!isset($user)) {
    header("Location: login.php");
    exit();
}
?>
<?php
include_once './parts/header.php';

new part_header("Home");
?>


<div class="dropdown">
    <button class="dropbtn">Profile</button>
    <div class="dropdown-content">
        <a href="#">Name: <?php echo htmlspecialchars($user['username']); ?></a>
        <a href="#">Email: <?php echo htmlspecialchars($user['email']); ?></a>
    </div>
</div>
 




