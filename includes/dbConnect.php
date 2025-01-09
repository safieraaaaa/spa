<?php
//define all required information
$hostname = "localhost"; //use "localhost:3306" if you default no
$username = "root";
$password = "";
$dbname = "spadb";
//create a connection with MySQL
$dbcon = mysqli_connect ($hostname, $username, $password)

or die ("Connection failed.!");

//if cannot connect to MySQL, error is displayed
//Using the successful connection,select which database want to access
$selectdb = mysqli_select_db($dbcon, $dbname)
or die ("Database not selected.!");

//if database cannot be selected, error is displayed
echo "DB connected successfully";
?> 