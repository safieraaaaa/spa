<?php
session_start(); // Start the session to manage user sessions


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $dsn = 'mysql:host=localhost;dbname=spadb';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get user inputs
        $email = htmlspecialchars(trim($_POST['username']));
        $password = htmlspecialchars(trim($_POST['password']));

        // Validate inputs
        if (empty($email) || empty($password)) {
            echo "<script>alert('Please enter both email and password.');</script>";
            exit;
        }

        // Check if the email exists in the database
        $query = "SELECT * FROM customer WHERE CustEmail = :email";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verify the password
            if (password_verify($password, $user['CustPassword'])) {
                // Set session variables
                $_SESSION['CustID'] = $user['CustID'];
                $_SESSION['CustName'] = $user['CustName'];
                $_SESSION['CustEmail'] = $user['CustEmail'];

                // Redirect to a dashboard or homepage
                echo "<script>
                    alert(Login successful!);
                    window.location.href = 'dashboard.php';
                </script>";
                exit;
            } else {
                echo "<script>alert('Invalid password. Please try again.');</script>";
            }
        } else {
            echo "<script>alert('No account found with this email. Please sign up.');</script>";
        }
    } catch (PDOException $e) {
        // Handle database errors
        echo "<script>alert('Error: " . addslashes($e->getMessage()) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Grace Spa</title>
   
</head>
<body>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(to bottom, #fff6e8, #f9f3e7);
    color: #333;
}

/* Login Container */
.login-container {
    display: flex;
    width: 75%;
    max-width: 1000px;
    height: 70%;
    background-color: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    border-radius: 10px;
}

/* Left Section */
.login-left {
    flex: 1;
    padding: 40px;
    background-color: #f8f9fa;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.login-left h2 {
    margin: 0 0 20px;
    font-size: 30px;
    color: #333;
}

.login-left p {
    margin: 0 0 30px;
    font-size: 16px;
    color:black;
}

.login-left label {
    display: block;
    margin: 10px 0 5px;
    font-size: 14px;
    color: black;
}

.login-left input {
    width: 85%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1.5px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

.options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
    color:black;
    margin-bottom: 20px;
}

.options input {
    margin-right: 5px;
}

.options a {
    color:rgb(0, 0, 0);
    text-decoration: none;
}

.options a:hover {
    text-decoration: underline;
}

.login-left button {
    width: 25%;
    padding: 10px;
    background-color:rgb(145, 61, 5);
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.login-left button:hover {
    background-color:rgb(226, 136, 80);
}
.options input {
    margin-right: 5px;
}

.options a {
    color:rgb(0, 0, 0);
    text-decoration: none;
}

.options a:hover {
    text-decoration:none;
}


/* Right Section */
.login-right {
    flex: 1;
    position: relative;
}

.login-right img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Responsive Design */
@media (max-width: 768px) {
    .login-container {
        flex-direction: column;
        height: auto;
    }

    .login-right {
        display: none;
    }
}
</style>
    <div class="login-container">
        <!-- Left Section -->
        <div class="login-left">

            <h2>Login to Grace Spa</h2>

            <p>Please log in to continue Book your appointment.</p>
            <form action="login.php" method="POST">
                <label for="username">Email</label>
                <input type="email" id="username" name="username" placeholder="Enter your email" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                
                <div class="options">
                    <a href="forgot-password.php">Forgot Password?</a>
                </div>
                
                <button type="submit">Log In</button>

                <div class="options">
                    <a href="signup.php">Create an account?</a>
                </div>
                <div class="options">
                    <a href="index.php">Back home </a>
                </div>
            </form>
        </div>
        
        <!-- Right Section -->
        <div class="login-right">
            <img src="image/nail.jpeg" alt="Nail Spa Background">
        </div>
    </div>
</body>
</html>
