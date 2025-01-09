<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include header file
include_once('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us - Grace Spa</title>
<style>

body, h2, h3, p {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Georgia', serif;
}

/* About Section Styling */
.about-section {
    padding: 50px 20px;
    background-color: #f9f3e7; /* Soft background tone */
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.about-content {
    display: flex;
    align-items: center;
    gap: 30px;
}

.about-image img {
    max-width: 100%;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.about-text {
    flex: 1;
}

.about-text h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #b38b6d;
    margin-bottom: 10px;
}

.about-text h3 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #333;
    font-weight: bold;
}

.about-text p {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 15px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-content {
        flex-direction: column;
        text-align: center;
    }

    .about-image img {
        max-width: 80%;
        margin: 0 auto;
    }
}
</style>
<section class="about-section">
    <div class="container">
        <div class="about-content">
            <!-- Left Image -->
            <div class="about-image">
                <img src="image/01.jpg" alt="About Mon Chéri">
            </div>

            <!-- Right Text -->
            <div class="about-text">
                <h2>About Mon Chéri</h2>
                <h3>Mon Chéri Signature Bridal was established in 2016</h3>
                <p>
                    With a simple goal in mind, to make the important day of brides most memorable, by giving them the most stunning outfit with unique selection/design of gowns at an affordable price.
                </p>
                <p>
                    Our couture collection design was inspired by ethereal beauty × vintage fashion. As known for their romantic, sensual nature and exquisite details, along with their figure-flattering silhouettes and emphasis on comfort.
                </p>
            </div>
        </div>
    </div>
</section>
