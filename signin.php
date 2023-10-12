<?php
    // Dynamic Header
    $title = 'Log in'; include("header.php");
     include_once('./config/isSigninConfig.php');
?>

<link rel="stylesheet" href="./css/signin.css">

<section class="m-container">
    <h1 class="main-title">SIGN IN</h1>
    <div class="m-types">
            <div class="m-type" id="type1">
                <img src="./images/signin/buyersignin.jpg" alt="buyer">
                <a href='./buyer-signin.php'>
                    <button class="m-btn1">I am Buyer</button>
                </a>
            </div>
            <div class="m-type" id="type2">
                <img src="./images/signin/sellersignin.jpg" alt="seller">
                <a href='./seller-signin.php'>
                    <button class="m-btn2">I am Seller</button>
                </a>
            </div>
    </div>
</section>
<div class="admin-signin">
    <a href='./admin-signin.php'>
        <button class="m-btn1">Admin</button>
    </a>
</div>

<?php include("footer.php"); ?>