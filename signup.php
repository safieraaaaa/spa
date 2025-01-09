<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
    // Enable error reporting for debugging
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Database connection
    $dsn = 'mysql:host=localhost;dbname=spadb';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get user inputs
        $fullname = htmlspecialchars(trim($_POST['fullname']));
        $email = htmlspecialchars(trim($_POST['email']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $password = htmlspecialchars(trim($_POST['password']));
        $confirmPassword = htmlspecialchars(trim($_POST['confirm-password']));

        // Check if inputs are valid
        if (empty($fullname) || empty($email) || empty($phone) || empty($password) || empty($confirmPassword)) {
            echo "<script>alert('Please fill in all fields.');</script>";
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email format.');</script>";
            exit;
        }

        // Check if passwords match
        if ($password !== $confirmPassword) {
            echo "<script>alert('Passwords do not match! Please try again.');</script>";
            exit;
        }

        // Check if email already exists
        $checkQuery = "SELECT COUNT(*) FROM customer WHERE CustEmail = :email";
        $stmt = $pdo->prepare($checkQuery);
        $stmt->execute(['email' => $email]);
        if ($stmt->fetchColumn() > 0) {
            echo "<script>alert('Email already exists. Please use a different email.');</script>";
            exit;
        }

        // Insert into database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO customer (CustName, CustEmail, CustPhone, CustPassword) VALUES (:fullname, :email, :phone, :password)";
        $stmt = $pdo->prepare($query);
        $isInserted = $stmt->execute([
            'fullname' => $fullname,
            'email' => $email,
            'phone' => $phone,
            'password' => $hashedPassword,
        ]);

        if ($isInserted) {
            echo "<script>
                if (confirm('Registration successful! Click OK to log in.')) {
                    window.location.href = 'login.php';
                }
            </script>";
        } else {
            echo "<script>alert('Registration failed. Please try again.');</script>";
        }
    } catch (PDOException $e) {
        // Handle database-related errors
        echo "<script>alert('Database error: " . addslashes($e->getMessage()) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
 
</head>
<body>
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 95vh;
    background: linear-gradient(to bottom, #fff6e8, #f9f3e7);
    color: #333;
}

.signup-container {
    display: flex;
    width: 75%;
    height: 80vh;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    overflow: hidden;
}

.signup-left {
    width: 50%;
    padding: 40px;
    background-color: #ffffff;
}

.signup-left h2 {
    font-size: 26px;
    margin-bottom: 20px;
}

.signup-left p {
    margin-bottom: 30px;
    color: #666;
}

.signup-left form label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

.signup-left form input {
    width: 75%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.signup-left .buttons {
    display: flex;
    gap: 10px;
}

.signup-left .buttons button {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    color: #fff;
    cursor: pointer;
    border-radius: 5px;
}

.signup-left .buttons button[name="signup"] {
    background-color:rgb(156, 105, 8);
}

.signup-left .buttons button[name="signup"]:hover {
    background-color:rgb(167, 75, 0);
}

.signup-left .buttons button[type="button"] {
    background-color:rgb(197, 112, 33);
}

.signup-left .buttons button[type="button"]:hover {
    background-color:rgb(196, 113, 45);
}

.signup-right {
    width: 50%;
    background-color: #f4f4f4;
    overflow: hidden;
}

.signup-right img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
      <div class="signup-container">
        <div class="signup-left">
            <h2>Create an Account at Grace Spa</h2>
            <p>Sign up to start booking and enjoy exclusive benefits.</p>
            <form action="signup.php" method="POST">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Your Full Name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="your-email@gmail.com" required>

                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="Your Phone Number" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a Password" required>

                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Your Password" required>

                <div class="buttons">
                    <button type="submit" name="signup">Sign Up</button>
                </div>
                <div class="options">
                    <a href="login.php">Already have an account?</a>
                </div>
            </form>
        </div>
        <div class="signup-right">
            <img src="image/kaki.jpg" alt="Background Image">
        </div>
    </div>
</body>
</html>