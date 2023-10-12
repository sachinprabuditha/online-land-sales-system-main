<?php
  // Database config
  require './config/databaseConfig.php';
  // Start Session
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <!-- import icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel = "icon" href = "./images/logo/logo1.png" type = "image/png">
     <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title><?php if (isset($title)) {echo "LandVault - "; echo $title;} else {echo "LandVault";} ?></title>
  </head>

  <body>
    <nav id="nav_bar">
      <div class="nav_container">
        <div class="nav_logo">
          <a href="./index.php"><img src="./images/logo/logo1.png" alt="LandVault"></a>
        </div>
        <div class="nav_links">
          <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./lands.php">Lands</a></li>
            <li><a href="./aboutUs.php">About Us</a></li>
            <li><a href="./contactUs.php">Contact Us</a></li>
          </ul>
        </div>

        <div class="nav_btn">
        <?php
            if (isset($_SESSION["id"])) {
              if ($_SESSION["role"] === 'admin') {
                echo '<a href="./adminDashboard.php"><button class="dashboard">Admin Dashboard</button></a>';
              }
              else if (($_SESSION["role"] === 'buyer')) {
                echo '<a href="./buyerDashboard.php"><button class="dashboard">Dashboard</button></a>';
              }
              else if (($_SESSION["role"] === 'seller')) {
                echo '<a href="./sellerDashboard.php"><button class="dashboard">Dashboard</button></a>';
              }
              echo '<a href="./config/logout.php"><button class="logout">Logout</button></a>';
            }
            else {
              echo '<a href="./signup.php"><button class="signup">Sign Up</button></a>';
              echo '<a href="./signin.php"><button class="signin">Sign In</button></a>';
            }
            ?>
        </div>

        
      </div>
    </nav>

<script src="./js/header.js"></script>