<?php
    // Dynamic Header
    $title = 'Signup'; include("header.php");
    include_once('./config/isSigninConfig.php');
?>

<link rel="stylesheet" href="./css/signup.css">

<section class="m-container">
    <h1 class="main-title">SIGN UP</h1>
    <div class="m-types">
            <div class="m-type" id="type1">
                <img src="./images/signin/buyersignup.jpg" alt="Buyer">
                <a href='./buyerSignup.php?role=buyer'>
                    <button class="m-btn1">I am Buyer</button>
                </a>
            </div>
            <div class="m-type" id="type2">
                <img src="./images/signin/sellersignup.jpg" alt="Seller">
                <a href='./sellerSignup.php?role=seller'>
                    <button class="m-btn2">I am Seller</button>
                </a>
            </div>
    </div>
</section>

<?php include("footer.php"); ?>
