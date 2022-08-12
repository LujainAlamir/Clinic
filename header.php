<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "project2");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <title> Check My Medicine Website </title>
  <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="reset.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    
</head>
<body>
  <section class="sub-header">
    <nav>
        <a href="index.html"><img src="images/Logo.png"> </a>
        <div class="nav-links">
           <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="About.php">ABOUT US</a></li>
            <li><a href="Contact.php">CONTACT US</a></li>
               <?php
               if(isset($_SESSION["id"])){
                   echo " <li><a href='alter.php'>ALTER</a></li>";
                   echo " <li><a href='view.php''>VIEW</a></li>";
                   echo " <li><a href='logout.php'>LOGOUT</a></li>";


               }
               else{
                    echo "<li><a href='Sign.php'' class='sign-in'>SIGN IN</a></li>";
               }
               ?>
            </ul> 
        </div>
    </nav> 