<?php
    // Dynamic Header
    $title = 'Update'; include("header.php");
?>

<link rel="stylesheet" href="./css/updateUser.css">

<section>
    <h1 class="main-title">Edit User Details</h1>

    <?php
        include_once("./config/databaseConfig.php");
        include_once("./config/functions.php");

        $row = getUserDetails($conn, $_GET["id"], $_GET["role"]);
    
            $id = $row["buyerID"];
            $fname = $row["b_fname"];
            $lname = $row["b_lname"];
            $username = $row["b_username"];
            $email = $row["b_email"];
            $role = 'buyer';
        
    ?>

        <div class="container">
       
         <!-- Display Old details of user -->
        <form class="update_form" action="./buyer/editUserConfig.php" method="POST">
                <input hidden value='<?php echo"$id" ?>' required type="text" name="id">
                <div class="input-field">
                <label>First Name</label>
                <input required value='<?php echo"$fname";?>' type="text" name="fname">
                </div>
                <div class="input-field">
                <label>Last Name</label>
                <input required value='<?php echo"$lname";?>' type="text" name="lname">
                </div>
                <div class="input-field">
                <label>User Name</label>
                <input required value='<?php echo"$username";?>' type="text" name="username">
                </div>
                <div class="input-field">
                <label>Email</label>
                <input required value='<?php echo"$email";?>' type="email" name="email">
                </div>
                <input hidden value='<?php echo"$role" ?>' type="text" name="role">
                <div class="btn">
                <button type="submit" name="update">Update</button>
                </div>
            </form>
    
        </div>

</section>

<?php include("footer.php"); ?>