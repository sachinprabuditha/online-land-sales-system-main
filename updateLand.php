<?php
    // Dynamic Header
    $title = 'Update'; include("header.php");
    // Check if user is an admin
    include("./admin/adminConfig.php");
?>

<link rel="stylesheet" href="./css/updateLand.css">

<section>
    <h1 class="main-title">Update Land Details</h1>

    <?php
        include_once("./config/databaseConfig.php");

        $landid = $_GET["id"];

        $sql = mysqli_query($conn, "SELECT *
                                    FROM land
                                    WHERE landID='" . $landid . "' 
                                    ");

        $row  = mysqli_fetch_array($sql);

        mysqli_close($conn);

            $id = $row["landID"];
            $lTitle = $row["l_title"];
            $lLocation = $row["l_location"];
            $lPrice = $row["l_price"];
        
    ?>

        <div class="container">
       
         <!-- Display Old details of user -->
        <form class="update_form" action="./admin/updateLandConfig.php" method="POST">
                <input hidden value='<?php echo"$id" ?>' required type="text" name="id">
                <div class="input-field">
                <label>Land Title</label>
                <input required value='<?php echo"$lTitle";?>' type="text" name="lTitle">
                </div>
                <div class="input-field">
                <label>Land Location</label>
                <input required value='<?php echo"$lLocation";?>' type="text" name="lLocation">
                </div>
                <div class="input-field">
                <label>Land Price</label>
                <input required value='<?php echo"$lPrice";?>' type="text" name="lPrice">
                </div>
                <div class="btn">
                <button type="submit" name="update">Update</button>
                </div>
            </form>
    
        </div>

</section>

<?php include("footer.php"); ?>