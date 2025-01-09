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
    <title>Manicure Services - Spa Nail and Manicure</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
        }

        .services-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .service-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: calc(25% - 20px); /* Four cards in a row */
            overflow: hidden;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: scale(1.05);
        }

        .service-card img {
            width: 100%;
            height: auto;
        }

        .service-card h3 {
            text-align: center;
            color: #333;
            padding: 15px 0;
        }

        .service-card p {
            padding: 0 15px 15px;
            color: #555;
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .service-card {
                width: calc(50% - 20px); /* Two cards in a row on smaller screens */
            }
        }

        @media (max-width: 480px) {
            .service-card {
                width: 100%; /* One card in a row on very small screens */
            }
        }
    </style>
</head>
<body>

<div class="services-container">
    <div class="service-card">
        <img src="image/manicure1.jpeg" alt="Classic Manicure">
        <h3>Classic Manicure</h3>
        <p>A traditional manicure that includes nail shaping, cuticle care, and a polish of your choice.</p>
    </div>
    <div class="service-card">
        <img src="image/manicure2.jpeg" alt="Gel Manicure">
        <h3>Gel Manicure</h3>
        <p>Long-lasting gel polish that provides a glossy finish and is chip-resistant for weeks.</p>
    </div>
    <div class="service-card">
        <img src="image/manicure3.jpeg" alt="French Manicure">
        <h3>French Manicure</h3>
        <p>A timeless style featuring a natural base with white tips, perfect for any occasion.</p>
    </div>
    <div class="service-card">
        <img src="image/manicure4.jpeg" alt="Luxury Spa Manicure">
        <h3>Luxury Spa Manicure</h3>
        <p>Indulge in a pampering experience with exfoliation, massage, and a nourishing mask.</p>
    </div>
</div>

<?php include_once('includes/footer.php'); ?>
</body>
</html>