<header>
    <h1>GIBJOHN</h1>
    <h2>  Online tutoring </h2>
    <nav> 
        <b><a href="index.php">Home</a></b>
        <b><a href="about.php">About</a></b>
        <b><a href="contact.php">Contact</a></b>   
        <b><a href="termsandconditions.php">terms and condition</a></b>
        <b><a href="accessibility.php">Accessibility</a></b>
        
        <?php if (isset($_SESSION['user']['id'])): ?>
            <b><a href="packages.php">Packages</a></b>
            <b><a href="dashboard.php">Dashboard</a></b>
            <b><a href="logout.php">Logout</a></b>
        <?php else: ?>
            <b><a href="register.php">Register</a></b>
            <b><a href="login.php">Login</a></b>
        <?php endif; ?>
    </nav> 
</header> 