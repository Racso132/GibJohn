<?php
include './includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Hash the password
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Check if passwords match
        if ($_POST['password'] !== $_POST['confirm_password']) {
            echo "Passwords do not match";
            exit();
        }

        // Check for missing required fields
        if (empty($username) || empty($email) || empty($password)) {
            echo "Please fill in all fields";
            exit();
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email";
            exit();
        }
 
        // Prepare and execute the database insert
        $stmt = $pdo->prepare("INSERT INTO users (username, password, email, phone) VALUES (:username, :password, :email, :phone)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);

        // Execute the query and check if it was successful
        if ($stmt->execute()) {
            // Redirect to login page if the query is successful
            header('Location: login.php');
            exit();
        } else {
            echo "Failed to insert data into the database.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<?php
include_once './parts/header.php';

new part_header("Register");

?>
  
<section>
    <h2>Register</h2>
    <div>
        <form action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone: (not required)</label>
            <input type="text" id="phone" name="phone">

            <input type="submit" value="Register">
        </form>
    </div>
</section>
<?php include './parts/footer.php'; ?>

</body>
</html>