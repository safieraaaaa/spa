<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database and header
include('includes/dbConnect.php');
include_once('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Spa Nail and Manicure</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
        }

        .contact-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #333;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            text-align: center;
        }

        .btn:hover {
            background-color: #555;
        }

        .contact-info {
            margin-top: 30px;
            text-align: center;
        }

        .contact-info i {
            margin-right: 10px;
            color: #333;
        }

        .our-contact {
            margin-top: 40px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 8px;
        }

        .our-contact h2 {
            color: #333;
            text-align: center;
        }

        .our-contact p {
            text-align: center;
            color: #555;
        }
    </style>
</head>
<body>
<div class="contact-container">
    <h1>Contact Us</h1>
    <form action="process_contact.php" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn">Send Message</button>
    </form>
    <div class="our-contact">
        <h2>Our Contact</h2>
        <p>We are here to help you with any inquiries or bookings. Feel free to reach out to us through any of the following methods:</p>
        <p><i class="fas fa-phone"></i> Call us at: 09 592 - 1118</p>
        <p><i class="fas fa-envelope"></i> Email us at: <a href="mailto:igracepspa@yahoo.com">igracepspa@yahoo.com</a></p>
        <p><i class="fas fa-clock"></i> Business Hours: Mon-Sat: 10 AM - 7:30 PM, Sun: 10:30 AM - 5:30 PM</p>
        <p><i class="fas fa-map-marker-alt"></i> Visit us: 123 Spa Lane, Beauty City, BC 12345</p>
        <p>Follow us on social media for updates and promotions:</p>
        <p>
            <a href="https://facebook.com/spasalon" target="_blank"><i class="fab fa-facebook"></i> Facebook</a> |
            <a href="https://instagram.com/spasalon" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
        </p>
    </div>
</div>

<?php include_once('includes/footer.php'); ?>
</body>
</html> 