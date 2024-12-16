<?php


class part_header {
    public $page_title = "GibJohn";

    public function __construct($page_title) {
        $this->page_title = $page_title . " | " . $this->page_title;
        $this->render();
    }

    public function render() {
        ?>
        <!DOCTYPE html> 
        <html lang="en">

  
        <head>
            <meta charset="UTF-8">

            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $this->page_title; ?></title>
            <link rel="stylesheet" href="style.css">
        </head>

        <body>
            <header>
            <img class="GibJohn_logo9" src="GibJohn_logo9.webp">
                <h2> Online tutoring </h2>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="contact.php">Contact</a>
                    <a href="termsandcondition.php">terms and condition</a>
                    <a href="accessibility.php">Accessibility</a>
                    <a href="updates.php">Updates</a>
                    <?php if (isset($_SESSION['user']['id'])): ?>
                        <a href="dashboard.php">Dashboard</a>
                        <a href="packages.php">Packages</a>
                        <a href="logout.php">Logout</a>
                        <a href="profile.php">Profile</a>
                    <?php else: ?>
                        <a href="register.php">Register</a>
                        <a href="login.php">Login</a>
                    <?php endif; ?>
                </nav>
            </header>
    <?php
    }
}