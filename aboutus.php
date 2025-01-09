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
        body, h1, h2, p, ul {
            margin: 0;
            padding: 0;
            font-family: 'Georgia', serif;
            box-sizing: border-box;
        }
        /* About Us Section */
        .about-us {
            padding: 50px 20px;
            background: linear-gradient(to bottom, #fff6e8, #f9f3e7);
            color: #333;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            font-size: 48px;
            color: #b38b6d; /* Elegant Gold-Brown Tone */
            margin-bottom: 20px;
        }

        .about-us p {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
            text-align: center;
            margin-bottom: 40px;
        }

        .about-content {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 30px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .about-image img {
            height: 450px;
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-text {
            flex: 1;
            max-width: 600px;
        }

        .about-text h2 {
            font-size: 32px;
            color: #b38b6d;
            margin-bottom: 15px;
        }

        .about-text p {
            text-align: justify;
            font-size: 16px;
            line-height: 1.8;
            color: #666;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            font-size: 16px;
            line-height: 1.8;
            color: #666;
            margin: 10px 0;
            padding-left: 30px;
            position: relative;
        }

        ul li::before {
            content: "✔";
            color: #d4af37; /* Gold Bullet */
            font-size: 18px;
            position: absolute;
            left: 0;
        }

        /* Mission Section */
        .mission {
            text-align: center;
            padding: 30px 20px;
            background:'';
            border-radius: none;
            box-shadow: none;
        }

        .mission h2 {
            font-size: 32px;
            color: #b38b6d;
            margin-bottom: 15px;
        }

        .mission p {
            font-size: 18px;
            line-height: 1.8;
            color: #666;
        }

        /* about us /Philosophy Section */
        .philosophy-section {
            padding: 50px 20px;
            background-color: #f9f3e7; /* Soft background tone */
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .philosophy-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 30px;
        }

        .philosophy-image img {
            max-width: 50%; /* Reduce the size of the image */
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .philosophy-text {
            flex: 1;
        }

        .philosophy-text h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #b38b6d;
            margin-bottom: 10px;
        }

        .philosophy-text h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #333;
            font-weight: bold;
        }

        .philosophy-text p {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 15px;
        }

        /* Why Choose Us Section */
        .why-choose-us-section {
            display: flex;
            align-items: center;
            gap: 30px;
            padding: 20px;
            background-color: #f9f3e7; /* Soft background tone */
            color: #333;
          ;
        }

        /* Container for the text */
        .why-choose-us-text {
            flex: 1;
            max-width: 600px;
        }

        /* Styling for the list */
        .why-choose-us-text ul {
            list-style: none;
            padding: 0;
        }

        .why-choose-us-text ul li {
            font-size: 16px;
            line-height: 1.8;
            color: #666;
            margin: 10px 0;
            padding-left: 30px;
            position: relative;
        }

        .why-choose-us-text ul li::before {
            content: "✔";
            color: #d4af37; /* Gold Bullet */
            font-size: 18px;
            position: absolute;
            left: 0;
        }

        /* Container for the image */
        .why-choose-us-image img {
            max-width: 500px; /* Set image size */
            border-radius: 17px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .philosophy-content {
                flex-direction: column;
                text-align: center;
            }

            .why-choose-us-section {
                flex-direction: column;
                text-align: center;
            }

            .why-choose-us-image img {
                max-width: 100%;
                margin: 0 auto;
            }
        }
    </style>
</head>
<body>
    <!-- About Us Section -->
    <section class="about-us">
        <div class="container">
            <h1>Welcome to Grace Spa</h1>
            <p>At Grace Spa, we believe in the art of relaxation and beauty. Specializing in manicures and pedicures, we strive to provide a luxurious experience that not only enhances your beauty but also rejuvenates your spirit.</p>

            <div class="about-content">
                <div class="about-image">
                    <img src="image/08.jpeg" alt="Grace Spa">
                </div>
                
                <div class="about-text">
                    <h2>About Us</h2>
                    <div class="philosophy-section">
                        <p>
                            Grace Spa is more than just a spa; it’s a sanctuary where your well-being takes center stage.
                            Our skilled therapists are dedicated to rejuvenating your mind, body, and spirit through personalized treatments tailored to your needs. From soothing massages to invigorating facials, each service is designed to leave you feeling refreshed and renewed.
                            At Grace Spa, we believe in the power of self-care to transform your day and uplift your soul. Immerse yourself in our tranquil ambiance, enhanced by calming aromas, soft music, and a team of professionals who prioritize your comfort and satisfaction.
                        </p>
                    </div>
                </div>
            </div>

            <div class="why-choose-us-section">
                <div class="why-choose-us-text">
                    <h2>Why Choose Us?</h2>
                    <ul>
                        <li>Expertly trained professionals dedicated to your comfort.</li>
                        <li>Premium quality products for nail care and wellness.</li>
                        <li>A clean, safe, and hygienic environment.</li>
                        <li>Personalized services tailored to your unique needs.</li>
                    </ul>
                </div>
                <div class="why-choose-us-image">
                    <img src="image/09.jpeg" alt="Promotional Photograph">
                </div>
            </div>

            <div class="mission">
                <h2>Our Mission</h2>
                <p>
                    To empower confidence and self-love through exceptional beauty and wellness services. At Grace Spa, we don't just enhance your nails; we uplift your mood and spirit.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer Include -->
    <?php include_once('includes/footer.php'); ?>
</body>
</html>
