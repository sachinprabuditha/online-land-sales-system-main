<!-- dynamic lands page -->
<?php 
 $title = 'Lands'; include("header.php");
?> 

<link rel="stylesheet" href="./css/lands.css">

<div class='city-sector'>
        <div class='city-grid'> 

<?php
    // get land details from the database
    $sql = "SELECT * from land";
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
                    <div class='location'>
                        <div class='location-div'>
                            <i class='bx bx-location-plus'></i>
                            <p>Location</p>
                        </div>
                        <p>".$row['l_location']."</p>
                    </div>
                    <div class='price'>
                        <div class='price-div'>
                            <i class='bx bx-money'></i>
                            <p>Price</p>
                        </div>
                        <p>LKR ".$row['l_price']."</p>
                    </div>
                </div>
            </div>
        </a>
    ";
    if ($row['isSold'] === '0' ){
            echo "<div class='available'>
                    <p>AVAILABLE</p>
                  </div>";
    }
    else if ($row['isSold'] === '1' ) {
        echo "<div class='sold'>
                    <p>SOLD OUT</p>
                  </div>";
    }
    
                            }
                        }
    mysqli_close($conn);
    ?>
    </div>
    </div>
    

<?php include("footer.php"); ?>