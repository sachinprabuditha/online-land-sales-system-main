<?php
    // Dynamic Header
    $title = 'Land Details'; include("header.php");

?>

<link rel="stylesheet" href="./css/landDetails.css">

<?php 

    include_once("./config/databaseConfig.php");

    $id = $_GET["id"];

    $sql = mysqli_query($conn, "SELECT * FROM land
                                         WHERE landID='" . $id . "';
                                        ");
        
    $row  = mysqli_fetch_array($sql);

    // $click = $row['click_count'];

    // $sql2 = mysqli_query($conn, "UPDATE land SET
    //                               'click_count' = '$click'
    //                               WHERE landID='" . $id . "'
    //                               ");

    mysqli_close($conn);

    $landID = $row['landID'];
    $image = $row['l_imgLoc'];
    $title = $row['l_title'];
    $location = $row['l_location'];
    $price = $row['l_price'];
    $description = $row['l_description'];
    $isSold = $row['isSold'];
    echo "


<div class='land_container'>
    <div class='img_container'>
        <img src='./images/lands/".$image.".webp' alt=''>
    </div>
    <div class='det_container'>
        <div class='land_title'>
            <p>". $title ."</p>
        </div>
        <div class='land_des'>
            <P>". $description ."</P>
        </div>
        <div class='land_tags'>
            <div class='location'>
                <i class='bx bx-location-plus'></i>
                <p>". $location ."</p>
            </div>
            <div class='price'>
                <i class='bx bx-money'></i>
                <p>". $price ."</p>
            </div>
        </div> ";

        if ($row['isSold'] === '0' ){
        echo "
        <a href='./paymentgateway.php?id=". $landID ."'>
        <div class='buy_btn'>
            <p>BUY NOW</p>
            <i class='bx bxs-right-arrow-circle'></i>
        </div>
        </a>
    </div>
</div>
";
        }
        else if ($row['isSold'] === '1' ){
            echo "
            <div class='buy_btn'>
                <p>SOLD OUT</p>
            </div>
            </a>
        </div>
    </div>
    ";
            }
?>

<?php include("footer.php"); ?>