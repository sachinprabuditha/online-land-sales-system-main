<?php
    
    if (isset($_POST["update"])) {
        
        $id = $_POST["id"];
        $lTitle = $_POST["lTitle"];
        $lLocation = $_POST["lLocation"];
        $lPrice = $_POST["lPrice"];

        include_once("../config/databaseConfig.php");
        

        $sql = mysqli_query($conn, "UPDATE land SET
                                    `l_title` = '$lTitle',
                                    `l_location` = '$lLocation',
                                    `l_price` = '$lPrice'
                                    WHERE landID ='" . $id . "'
                            ");
       
    
        mysqli_close($conn);

        header("location: ../sellerDashboard.php");
        
    }
    else {
        header("location: ../index.php");
    }

?>s