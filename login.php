<?php
session_start();

include './includes/db.php'; 

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Retrieve the username and password from the POST request
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Prepare the SQL statement for inserting the user into the database
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username=?");      
        // Execute the statement
        $stmt->execute([$_POST['username']]);
        $usr = $stmt->fetch();
 
        if (password_verify($_POST['password'], $usr['password'])) {
            $_SESSION['user']['id'] = $usr['id'];
            $_SESSION['user']['username'] = $usr['username'];
            header('Location: dashboard.php');
        } else {
            $error = 'uh oh something went wrong please make sure you have registered first or made sure your username and/or password are correct if  this proceeds to happen again and you have done the above please contact us or try re-registering or try again later. if you have forgotten your password please contact us and we will help you reset it';
        }

        // echo "Registration successful!";
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
    <title>Subjects and more./ GibJohn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include './parts/header.php'; ?>         
    <section>
    <div>
    <form action="login.php" method="post">
        <?php if (isset($error)) echo $error; ?>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
    </form>
</div>
</section>
    <?php include './parts/footer.php'; ?>

</body>
</html> 