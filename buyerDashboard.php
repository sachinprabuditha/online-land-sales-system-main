<?php
    // Dynamic Header
    $title = 'Buyer Dashboard'; include("header.php");
    // Check if user is a buyer
    include("./buyer/buyerConfig.php");
    
?>

<link rel="stylesheet" href="./css/buyerDashboard.css">


<!-- Tab System -->
<section class="tabSystem">
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Profile')" id="defaultOpen">Profile</button>
        <button class="tablinks" onclick="openTab(event, 'MyLands')">My Lands</button>
    </div>

    <div id="Profile" class="tabcontent">
        <h2 class="tabTitle">Profile</h2>
        <?php

            $sql = mysqli_query($conn, "SELECT *
            FROM buyer AS B
            WHERE B.buyerID ='" . $_SESSION["id"] . "'
            ");

            $row = mysqli_fetch_array($sql);

            $id = $row["buyerID"];
            $username = $row["b_username"];
            $fname = $row["b_fname"];
            $lname = $row["b_lname"];
            $email = $row["b_email"];
            $role = $row["role"];        


        ?>
        <div class="container">
            <div class="img_container">
                <div class="prof_img">
                    <img src="./images/profile/profile-pic.jpg" alt="profile picture">
                </div>
            </div>

            <div class="details_container">
                <div class="user_details">
                    <div class="text_area">
                        <p>First name</p>  
                        <p class="data"><?php echo"$fname"?></p>
                    </div>
                    <div class="text_area">
                        <p>Last name</p> 
                        <p class="data"><?php echo"$lname"?></p>
                    </div>
                    <div class="text_area">
                        <p>Username</p> 
                        <p class="data"><?php echo"$username"?></p>
                    </div>
                    <div class="text_area">
                        <p>Email</p> 
                        <p class="data"><?php echo"$email"?></p>
                    </div>
                    <div class="text_area">
                        <p>User Type</p> 
                        <p class="data"><?php echo"$role"?></p>
                    </div>
                </div>
                <form action='./buyer/deleteOrEditUser.php' method='post'>
                    <div class="update">         
                    <button type='submit' name='edit'>Edit data</button>
                    <input hidden value=<?php echo "$id";?> required type='text' name='id'>
                    <input hidden value=<?php echo "$role";?> required type='text' name='role'>
                    </div>
                    <div class="delete">      
                    <button type='submit' name='delete' onclick='return checkdelete()'>Delete Account</button>
                    <input hidden value=<?php echo "$id";?> required type='text' name='id'>
                    <input hidden value=<?php echo "$role";?> required type='text' name='role'>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="MyLands" class="tabcontent">
        <h2 class="tabTitle">Lands I Brought</h2>
        <section class="users">
            <div class="user__table">
            <div class="user__tableHeader">
            <h3>Lands</h3>
                
            </div>
                
                <table id="users">
                    <tr>
                        <th>Land Title</th>
                        <th>Location</th>
                        <th>Brought Price</th>
                    </tr>

                    <?php
                        $sql1 = "SELECT * from soldlands
                                WHERE buyerID = '" . $_SESSION["id"] . "'
                                ";
                        $result = $conn->query($sql1);

                        if ($result->num_rows > 0) {
                            while ($row1 = $result->fetch_assoc()) {

                                $id = $row1["landID"];

                                $sql2 = mysqli_query($conn, "SELECT *
                                    FROM land
                                    WHERE landID='" . $id . "' 
                                     ");

                                $row2  = mysqli_fetch_array($sql2);


                            echo "
                            <form action='./seller/deleteOrUpdateLand.php' method='post'>
                                <tr>
                                <td>".$row2['l_title']."</td>
                                <td>".$row2['l_location']."</td>
                                <td>".$row2['l_price']."</td>
                                
                                </tr>
                            </form>";
                            }
                        }
                        else {
                            echo "<tr>
                            <td>'0 results'</td>
                            </tr>";
                        }

                        
                        mysqli_close($conn);
                       
                    ?>

                </table>
            </div>
        </section>
    </div>
</section>

<!-- End of Tab System -->



<script src="./js/buyerDashboard.js"></script>

<?php include("footer.php"); ?>