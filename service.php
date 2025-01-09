<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection and header
if (file_exists('includes/dbConnect.php')) {
    include('includes/dbConnect.php');
} else {
    die("Error: Unable to include dbConnect.php.");
}

if (file_exists('includes/header.php')) {
    include_once('includes/header.php');
} else {
    die("Error: Unable to include header.php.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Spa</title>
    <!-- Link external CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
    <style>
        /* General Reset */
body, h2 {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    box-sizing: border-box;
}

/* Body Background Color */
body {
    background-color: #f9f9f9;
}

/* Services Section */
.services {
    padding: 45px;
    background-color: #ffffff;
}

.service-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 35px;
}

.service-item {
    position: relative;
    height: 350px;
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.service-item:hover {
    transform: scale(1.05);
}

.service-item .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
    transition: background 0.3s ease-in-out;
}

.service-item:hover .overlay {
    background: rgba(0, 0, 0, 0.5);
}

.service-item h2 {
    color: #fff;
    font-size: 35px;
    font-weight: bold;
    text-transform: uppercase;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    text-align: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .service-grid {
        grid-template-columns: 1fr;
    }
}
 </style>

<body>
<body>
    <!-- Services Section -->
    <section class="services">
        <div class="service-grid">
            <a href="manicure.php" style="text-decoration: none;">
                <div class="service-item" style="background-image: url('image/05.jpeg');">
                    <div class="overlay">
                        <h2>Manicures</h2>
                    </div>
                </div>
            </a>
            <a href="pedicure.php" style="text-decoration: none;">
                <div class="service-item" style="background-image: url('image/07.jpeg');">
                    <div class="overlay">
                        <h2>Pedicures</h2>
                    </div>
                </div>
            </a>
            <a href="nailart.php" style="text-decoration: none;">
                <div class="service-item" style="background-image: url('image/08.jpeg');">
                    <div class="overlay">
                        <h2>Nail Art & Designs</h2>
                    </div>
                </div>
            </a>
            <a href="beauty.php" style="text-decoration: none;">
                <div class="service-item" style="background-image: url('image/09.jpeg');">
                    <div class="overlay">
                        <h2>Beauty</h2>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- Footer Include -->
    <?php 
    if (file_exists('includes/footer.php')) {
        include_once('includes/footer.php');
    } else {
        echo "<footer><p>Error: Unable to include footer.php.</p></footer>";
    }
    ?>
</body>
</html>
