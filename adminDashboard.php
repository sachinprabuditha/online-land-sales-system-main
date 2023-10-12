<?php
    // Dynamic Header
    $title = 'Admin Dashboard'; include_once("header.php");
    // Check if user is an admin
     include("./admin/adminConfig.php");
?>

<link rel="stylesheet" href="./css/adminDashboard.css">

<!-- Statistics -->
<section class='statics'>
    <h1 class="main_title">Admin Dashboard</h1><br>
    <?php
        $result = mysqli_query($conn, "SELECT COUNT(*) FROM seller");
        $sellerCount = mysqli_fetch_array($result);

        $result = mysqli_query($conn, "SELECT COUNT(*) FROM buyer");
        $buyerCount = mysqli_fetch_array($result);

        $result = mysqli_query($conn, "SELECT COUNT(*) FROM land");
        $landCount = mysqli_fetch_array($result);

        $result = mysqli_query($conn, "SELECT COUNT(*) FROM contactus");
        $messageCount = mysqli_fetch_array($result);
        
        
        echo "<div class='stat__container'>
                <div class='stat__box'>
                    <h1>". $buyerCount[0] ."</h1>
                    <h3>Buyers</h3>
                </div>
                <div class='stat__box'>
                    <h1>". $sellerCount[0] ."</h1>
                    <h3>Sellers</h3>
                </div>
                <div class='stat__box'>
                    <h1>". $landCount[0] ."</h1>
                    <h3>Lands</h3>
                </div>
                <div class='stat__box'>
                    <h1>". $messageCount[0] ."</h1>
                    <h3>Contact Messages</h3>
                </div>
                <div class='stat__box'>
                    <h1>". 7 ."</h1>
                    <h3>Categories</h3>
                </div>
            </div>
            ";
    ?>
</section>


<!-- Tab System -->
<section class="tabSystem">
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Buyers')" id="defaultOpen">Buyers</button>
        <button class="tablinks" onclick="openTab(event, 'Sellers')">Sellers</button>
        <button class="tablinks" onclick="openTab(event, 'Admins')">Admins</button>
        <button class="tablinks" onclick="openTab(event, 'Lands')">Lands</button>
        <button class="tablinks" onclick="openTab(event, 'Messages')">Messages</button>
        <button class="tablinks" onclick="openTab(event, 'Profile')">Profile</button>
    </div>

    <div id="Buyers" class="tabcontent">
        <h2 class="tabTitle">Buyers</h2>
        <!-- Buyers -->
        <section class="users">
            <div class="user__table">
                <div class="user__tableHeader">
                <h3>Buyers</h3>
                    <div class="">
                        <a class="nav_add" href="./addUser.php?role=buyer">Add new Buyer Account</a>
                    </div>
                </div>
                
                <table id="users">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Type</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                        $sql = "SELECT * from buyer";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                            echo "
                            <form action='./admin/deleteOrUpdateUser.php' method='post'>
                                <tr>
                                <td>".$row['buyerID']."</td>
                                <td>".$row['b_fname']."</td>
                                <td>".$row['b_lname']."</td>
                                <td>".$row['b_email']."</td>
                                <td>".$row['b_username']."</td>
                                <td>".$row['role']."</td>
                                <td>
                                    <button type='submit' name='update'>Update</button>
                                    <input hidden value=". $row['buyerID'] ." required type='text' name='id'>
                                    <input hidden value=". $row['role'] ." required type='text' name='role'>
                                </td>
                                <td>
                                
                                <button type='submit' name='delete' onclick='return checkdelete()'>Delete</button>
                                <input hidden value=". $row['buyerID'] ." required type='text' name='id'>
                                <input hidden value=". $row['role'] ." required type='text' name='role'>
                                
                                
                                </td>
                                
                                </tr>
                            </form>";
                            }
                        }
                        else {
                            echo "0 results";
                        }
                   
                    ?>

                </table>
            </div>
        </section>
    </div>

    <div id="Sellers" class="tabcontent">
        <h2 class="tabTitle">Sellers</h2>
         <!-- Sellers -->
         <section class="users">
            <div class="user__table">
            <div class="user__tableHeader">
            <h3>Sellers</h3>
                <div class="">
                    <a class="nav_add" href="./addUser.php?role=seller">Add new Seller Account</a>
                </div>
            </div>
                
                <table id="users">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Type</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                        $sql = "SELECT * from seller";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                            echo "
                            <form action='./admin/deleteOrUpdateUser.php' method='post'>
                                <tr>
                                <td>".$row['sellerID']."</td>
                                <td>".$row['s_fname']."</td>
                                <td>".$row['s_lname']."</td>
                                <td>".$row['s_email']."</td>
                                <td>".$row['s_username']."</td>
                                <td>".$row['role']."</td>
                                <td>
                                    <button type='submit' name='update'>Update</button>
                                    <input hidden value=". $row['sellerID'] ." required type='text' name='id'>
                                    <input hidden value=". $row['role'] ." required type='text' name='role'>
                                </td>
                                <td>
                                    <button type='submit' name='delete' onclick='return checkdelete()'>Delete</button>
                                    <input hidden value=". $row['sellerID'] ." required type='text' name='id'>
                                    <input hidden value=". $row['role'] ." required type='text' name='role'>
                                </td>
                                
                              </tr>
                            </form>";
                            }
                        }
                        else {
                            echo "0 results";
                        }
                   
                    ?>

                </table>
            </div>
        </section>
    </div>

    <div id="Admins" class="tabcontent">
        <h2 class="tabTitle">Admins</h2>
        <!-- Admins -->
        <section class="users">
            <div class="user__table">
            <div class="user__tableHeader">
            <h3>Admins</h3>
                <div class="">
                    <a class="nav_add" href="./addUser.php?role=admin">Add new Admin Account</a>
                </div>
            </div>
                
                <table id="users">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Type</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                        $sql = "SELECT * from admin";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                            echo "
                            <form action='./admin/deleteOrUpdateUser.php' method='post'>
                                <tr>
                                <td>".$row['adminID']."</td>
                                <td>".$row['a_fname']."</td>
                                <td>".$row['a_lname']."</td>
                                <td>".$row['a_email']."</td>
                                <td>".$row['a_username']."</td>
                                <td>".$row['role']."</td>
                                <td>
                                    <button type='submit' name='update'>Update</button>
                                    <input hidden value=". $row['adminID'] ." required type='text' name='id'>
                                    <input hidden value=". $row['role'] ." required type='text' name='role'>
                                </td>
                                <td>
                                    <button type='submit' name='delete' onclick='return checkdelete()'>Delete</button>
                                    <input hidden value=". $row['adminID'] ." required type='text' name='id'>
                                    <input hidden value=". $row['role'] ." required type='text' name='role'>
                                </td>
                                
                                </tr>
                            </form>";
                            }
                        }
                        else {
                            echo "0 results";
                        }
                    
                    ?>

                </table>
            </div>
        </section>
    </div>

    <div id="Lands" class="tabcontent">
        <h2 class="tabTitle">Lands</h2>
        <!-- Lands -->
        <section class="users">
            <div class="user__table">
            <div class="user__tableHeader">
            <h3>Lands</h3>
                <div class="">
                    <a class="nav_add" href="./addLand.php">Add new Land</a>
                </div>
            </div>
                
                <table id="users">
                    <tr>
                        <th>ID</th>
                        <th>Land Title</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Seller ID</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                        $sql = "SELECT * from land";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                            echo "
                            <form action='./admin/deleteOrUpdateLand.php' method='post'>
                                <tr>
                                <td>".$row['landID']."</td>
                                <td>".$row['l_title']."</td>
                                <td>".$row['l_location']."</td>
                                <td>".$row['l_price']."</td>
                                <td>".$row['sellerID']."</td>
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
                            echo "0 results";
                        }
                       
                    ?>

                </table>
            </div>
        </section>
    </div>

    <div id="Messages" class="tabcontent">
        <h2 class="tabTitle">Messages waiting for your response</h2>
        <!-- Admins -->
        <section class="users">
            <div class="user__table">
            <div class="user__tableHeader">
            <h3>Messages</h3>
            </div>
                
                <table id="users">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Message</th>
                        <th>Status</th>
                    </tr>

                    <?php
                        $sql = "SELECT * from contactus";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                            echo "
                            <form action='./admin/deleteMessage.php' method='post'>
                                <tr>
                                <td>".$row['conUsID']."</td>
                                <td>".$row['name']."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['mobile']."</td>
                                <td>".$row['message']."</td>
                                
                                <td>
                                    <button type='submit' name='Responded' onclick='return checkresponse()'>Mark As Responded</button>
                                    <input hidden value=". $row['conUsID'] ." required type='text' name='id'>
                                </td>
                                
                                </tr>
                            </form>";
                            }
                        }
                        else {
                            echo "0 results";
                        }
                        
                    ?>

                </table>
            </div>
        </section>
    </div>

    <div id="Profile" class="tabcontent">
        <h2 class="tabTitle">Profile</h2>
        <?php

            $sql = mysqli_query($conn, "SELECT *
            FROM admin 
            WHERE adminID ='" . $_SESSION["id"] . "'
            ");

            $row = mysqli_fetch_array($sql);            

            $id = $row['adminID'];
            $username = $row["a_username"];
            $fname = $row["a_fname"];
            $lname = $row["a_lname"];
            $email = $row["a_email"];
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
                    <form action='./admin/deleteOrUpdateAdmin.php' method='post'>
                    <div class="update">         
                    <button type='submit' name='update'>Edit data</button>
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
    </div>
</section>

<!-- End of Tab System -->

<script src="./js/adminDashboard.js"></script>

<?php include("footer.php"); ?>