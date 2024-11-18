<?php
session_start();

include './includes/db.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Retrieve the email, username, and password from the POST request
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepare the SQL statement for selecting the user from the database
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email=? AND username=?");
        // Execute the statement
        $stmt->execute([$email, $username]);
        $usr = $stmt->fetch();

        if ($usr && password_verify($password, $usr['password'])) {
            $_SESSION['user']['id'] = $usr['id'];
            $_SESSION['user']['username'] = $usr['username']; 
            $_SESSION['user']['email'] = $usr['email'];
            header('Location: dashboard.php');
        } else {
            $error = 'Uh oh, something went wrong. Please make sure you have registered first or made sure your email, username, and/or password are correct. If this issue persists, please contact us or try re-registering or try again later. If you have forgotten your password, please contact us and we will help you reset it.';
        } 

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

include_once './parts/header.php';

new part_header("Login");
?>

<section>
    <div>
        <form action="login.php" method="post">
            <?php if (isset($error)) echo $error; ?>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
    </div>
</section>
<?php include './parts/footer.php'; ?>