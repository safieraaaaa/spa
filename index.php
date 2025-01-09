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
    <title>Homepage Salon</title>
</head>
<style>
body, html {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}


/* Hero Section */
.hero {
    position: relative;
    text-align: center;
    color: black;
    background: url('image/03.jpg') no-repeat center center/cover; /* Update this path to your image */
    height: 80vh; /* Reduced height */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.hero .content h4 {
    font-size: 20px;
    color: black;
    margin: 10px 0;
    letter-spacing: 1px;
}

.hero .content h1 {
    font-size: 50px;
    font-weight: bold;
    color: black;
    max-width: 700px;
    margin: 20px auto;
    line-height: 1.5;
}

.hero .cta {
    padding: 10px 20px;
     font-size: 16px;
     color:rgb(0, 0, 0);
     background-color: transparent;
     border: 2px solid rgb(0, 0, 0);
     border-radius: 4px;
     cursor: pointer;
     transition: all 0.3s ease;
}

.hero .cta:hover {
    color:#fff;
    background-color: rgb(0, 0, 0);
}

/* Spa Pedicures Section */
.spa-pedicures {
    display: flex;
    align-items: center;
    justify-content:none;
    padding: 80px 0;
    background-color: #f9f9f9;
}

.spa-pedicures .content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    width: 100%;
    padding: 0 15px;
}

.spa-pedicures img {
    max-width: 50%;
    height: auto;
}

.spa-pedicures .text-content {
    max-width: 50%;
    padding-left: 30px;
}

.spa-pedicures .text-content h4 {
    font-size: 40px;
    text-align: center;
    color:rgb(0, 0, 0);
    margin-bottom: 10px;
}

.spa-pedicures .text-content h1 {
    font-size: 70px;
    font-family: 'Georgia', serif;
    text-align: center;
    font-weight: bold;
    color:rgb(0, 0, 0);
    margin-bottom: 20px;
}

.spa-pedicures .text-content p {
    font-size: 17px;
    text-align: center;
    color:black;
    margin-bottom: 30px;
}

.spa-pedicures .cta {
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #333;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.spa-pedicures .cta:hover {
    background-color: #555;
}
</style>

<body>

    <section class="hero">
        <div class="content">
            <h4>SELF-LOVE IS BLESS </h4>
            <h1>Bringing fashion to your fingertips.</h1>
            <button class="cta">Book an Appointment</button>
        </div>
    </section>

    <section class="spa-pedicures">
        <div class="content">
            <img src="image/04.jpeg" alt="Spa Pedicures" style="width:55%; height:350px;">
            <div class="text-content">
                <h4>Ultimate relaxation</h4>
                <h1>Spa Pedicures</h1>
                <p>SEASONAL SCENTS |ORGANIC OPTIONS | CALLUS REMOVAL | RELAXING MASSAGES | PARAFFIN & MORE!</p>
               
            </div>
        </div>
    </section>

    <?php include_once('includes/footer.php'); ?>
</body>
</html>
