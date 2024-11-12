<header>
    <h1>GIBJOHN</h1>
    <h2>  Online tutoring </h2>
    <nav> 
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>   
        <a href="termsandconditions.php">terms and condition</a>
        <a href="accessibility.php">Accessibility</a>
        
        <?php if (isset($_SESSION['user']['id'])): ?>
            <a href="packages.php">Packages</a>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </nav> 
</header> 