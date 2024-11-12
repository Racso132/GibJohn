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
    <title>Register - GibJohn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>GibJohn</h1>
        <?php include './parts/header.php'; ?> 
        
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