<?php
include './includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Hash the password
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Insert user into the database
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        header('Location: login.php');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Workout Routine</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Workout Routine</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a> 
            <a href="contact.php">Contact</a>
        
            <?php if (isset($_SESSION['user']['id'])): ?>
                <a href="dashboard.php">Dashboard</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </nav>
        
    </header>

    <section>
        <h2>Register</h2>
        <div>
        <form action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Register">
        </form>
            </div>
    </section>
    <?php include './parts/footer.php'; ?>
    
</body>
</html>