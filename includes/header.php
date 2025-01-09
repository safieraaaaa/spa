<header>
    <style>
    
 
 body, html {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Arial', sans-serif;
 }
 
 /* Header Styles */
 header {
     background-color: #fff;
     padding: 20px 0;
     border-bottom: 1px solid #e0e0e0;
     font-family: 'Arial', sans-serif;
 }
 
 header .container {
     max-width: 1200px;
     margin: 0 auto;
     display: flex;
     justify-content: space-between;
     align-items: center;
     padding: 0 15px;
 }
 
 /* Logo Styles */
 header .logo {
     font-size: 24px;
     font-weight: bold;
     color: #333;

 }
 
 /* Navigation Styles */
 header nav {
     display: flex;
     gap: 20px;
 }
 
 header nav a {
     text-decoration: none;
     color: #333;
     font-size: 20px;
     transition: color 0.3s ease;
 }
 
 header nav a:hover {
     color:rgb(0, 0, 0);
 }
 
 /* Social Links */
 header .social-links {
     display: flex;
     gap: 15px;
 }
 
 header .social-links a {
     color: #333;
     font-size: 18px;
     text-decoration: none;
     transition: color 0.3s ease;
 }
 
 header .social-links a:hover {
     color:rgb(170, 96, 12);
 }
 
 /* Book Now Button */
 header .book-now {
     padding: 10px 20px;
     font-size: 16px;
     color:rgb(0, 0, 0);
     background-color: transparent;
     border: 2px solidrgb(0, 0, 0);
     border-radius: 4px;
     cursor: pointer;
     transition: all 0.3s ease;
 }
 
 header .book-now:hover {
     color: #fff;
     background-color:rgb(0, 0, 0);
 }
</style> 


    <div class="container">
        <div class="logo">
            <a href ="index.php" style = "text-decoration:none; color:inherit;">GRACE SPA </a>
         </div>
        <nav>
            <a href="aboutus.php">About Us</a>
            <a href="service.php">Services</a>
            <a href="#">Contact</a>
            <a href="login.php">Login</a>
        </nav>
        <div class="social-links">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
          
        </div>
        <button class="book-now">BOOK NOW</button>
    </div>
</header>
