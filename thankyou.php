<?php 

 $title = 'Thank You'; include("header.php");
    // Check if user is a buyer
    include("./buyer/buyerConfig.php");
?>


<?php 

    $landID = $_POST["landID"];
    $buyerID = $_POST["buyerID"];

    $sql = mysqli_query($conn, "UPDATE land SET
        `isSold` = '1' 
        WHERE landID='" . $landID . "'
        ");

    $sql = mysqli_query($conn,"INSERT INTO soldlands (buyerID, landID) 
                VALUES ('$buyerID', '$landID');");
?>



<link rel = "stylesheet" href = "./css/thankyou.css" >

<div class="container_thank">
    <div class="icon">
        <i class='bx bx-check-circle'></i>
    </div>
    <div class="des">
        <div class="des1">
            <p>Thank You For Your Purchase</p>
        </div>
        <div class="des2">
            <p>We Will Contact You Soon..!!</p>
        </div>
        <div class="home_btn">
            <a href="./index.php"><button class="btn">Back To Home</button></a>
        </div>
    </div>
    
</div>


<?php include ("./footer.php"); ?>