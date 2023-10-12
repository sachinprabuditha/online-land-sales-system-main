<?php
    // Dynamic Header
    $title = 'Seller Dashboard'; include("header.php");
    // Check if user is a seller
    include("./seller/sellerConfig.php");
    
?>

<link rel="stylesheet" href="./css/sellerDashboard.css">


<!-- Tab System -->
<section class="tabSystem">
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Profile')" id="defaultOpen">Profile</button>
        <button class="tablinks" onclick="openTab(event, 'MyLands')">My Lands</button>
        <a href="./sellLands.php"><button class="tablinks" >Sell a Land</button></a>
    </div>

    <div id="Profile" class="tabcontent">
        <h2 class="tabTitle">Profile</h2>
        <?php

            $sql = mysqli_query($conn, "SELECT *
            FROM seller AS S
            WHERE S.sellerID ='" . $_SESSION["id"] . "'
            ");

            $row = mysqli_fetch_array($sql);

            $id = $row["sellerID"];
            $username = $row["s_username"];
            $fname = $row["s_fname"];
            $lname = $row["s_lname"];
            $email = $row["s_email"];
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
                <form action='./seller/deleteOrEditUser.php' method='post'>
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
        <h2 class="tabTitle">My Lands</h2>
        <!-- Lands -->
        <section class="users">
            <div class="user__table">
            <div class="user__tableHeader">
            <h3>Lands</h3>
                
            </div>
                
                <table id="users">
                    <tr>
                        <th>Land Title</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                        $sql = "SELECT * from land
                                WHERE sellerID = '" . $_SESSION["id"] . "'
                                ";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                            echo "
                            <form action='./seller/deleteOrUpdateLand.php' method='post'>
                                <tr>
                                <td>".$row['l_title']."</td>
                                <td>".$row['l_location']."</td>
                                <td>".$row['l_price']."</td>
                                <td>
                                    <button type='submit' name='update'>Update</button>
                                    <input hidden value=". $row['landID'] ." required type='text' name='id'>
                                </td>
                                <td>
                                    <button type='submit' name='delete' onclick='return checkdeleteland()'>Delete</button>
                                    <input hidden value=". $row['landID'] ." required type='text' name='id'>
                                </td>
                                
                                </tr>
                            </form>";
                            }
                        }
                        else {
                            echo "<tr>
                            <td>'0 results'</td>
                            </tr>";
                        }
                       
                    ?>

                </table>
            </div>
        </section>
    </div>
</section>

<!-- End of Tab System -->


<script src="./js/sellerDashboard.js"></script>

<?php include("footer.php"); ?>