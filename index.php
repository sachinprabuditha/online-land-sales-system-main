<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <!-- import icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
     <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php
    // Dynamic Header
    $title = 'Home'; include("header.php");
?>
  </head>

<body>

    <div class="cover">
        <img src="./images/cities/cover.jpg" alt="">
    </div>

    <div class="site_title">
        <p><span class= "first">Land</span><span class= "second">Vault</span> Online Land Sale</p>
    </div>

    <!-- Image slider code -->
    <div class="slideshow-container">
        <!-- Slide counter -->
        <div class="mySlides fade">
           
            <img src="./images/slide/img1.jpg">
        </div>

        <div class="mySlides fade">
           
            <img src="./images/slide/img2.jpg">
        </div>

        <div class="mySlides fade">
        
            <img src="./images/slide/img3.jpg">
        </div>

        <div class="mySlides fade">
    
            <img src="./images/slide/img4.jpg">
        </div>

        <!-- Next and previous buttons -->
        <a id="prev" onclick="plusSlides(-1)" class="prev">&#10094;</a>
        <a id="next" onclick="plusSlides(1)" class="next">&#10095;</a>

        <!-- The dots/circles -->
        <div class="beacons" style="text-align:center">
            <span id="d-one" class="dot" onclick="currentSlide(1)"></span>
            <span id="d-two" class="dot" onclick="currentSlide(2)"></span>
            <span id="d-three" class="dot" onclick="currentSlide(3)"></span>
            <span id="d-four" class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div>

    <div class="det_con1">
        <div class="img">
            <img src="./images/cities/img1.jpg" alt="">
        </div>
        <div class="des">
            <p class= "p1">Welcome to LandValt:<br> Your Premier Destination for Land Sales and Investments!</p>
        </div>
    </div>


    <div class='city-sector'>
        <div class="popular">
            <p>Popular Lands</p>
        </div>

        <div class='city-grid'> 

<?php
    // get land details from the database
    $sql = "SELECT * from land LIMIT 6";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
                echo "


        <a href='./landDetails.php?id=".$row['landID']."'>   
            <div class='city' id='c1'>
                <div class='pic-container'>
                    <img src='./images/lands/".$row['l_imgLoc'].".webp' alt=''>
                </div>
                <div class='city-det'>
                    <div class='title'>
                        <p class='l1'>".$row['l_title']."</p>
                    </div>
                </div>
            </div>
        </a>
    ";
    
                            }
                        }
    mysqli_close($conn);
    ?>
    </div>
    </div>

    <div class="det_con2">

        <div class="des">
            <p>At LandValt, we are passionate about connecting buyers and sellers in the world of land transactions. Our mission is to provide a comprehensive and efficient platform that simplifies the process of buying and selling land while empowering individuals and businesses to make informed decisions. <br><br><br><br><br>LandValt offers a vast and diverse range of land listings, catering to various needs and preferences. Whether you're looking for residential, commercial, agricultural, or recreational land, our platform has you covered. Our extensive database ensures that you'll find the perfect piece of land that aligns with your requirements.</p>
        </div>    

        <div class="img">
            <img src="./images/cities/img2.jpg" alt="">
        </div>
        
    </div>


</body>
<?php require "./footer.php" ?>


<script src="./js/home.js"></script>

</html>