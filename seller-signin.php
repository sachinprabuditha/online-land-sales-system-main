<?php
    // Dynamic Header
    $title = 'Seller Sign In'; include("header.php");
    include_once('./config/isSigninConfig.php');
?>

<link rel="stylesheet" href="./css/seller-signin.css">

<section class="lg-container">
  <div class="bg-image">
    <img src="./images/signin/sellerlogin.png" alt="">
  </div>
  <div class="login">
    <h1 class="main-title"><u>Seller</u> Sign In</h1>
    <div class="login-form">
      <form action="./config/signinConfig.php" method="post">
        <input type="hidden" name="user_type" id="users" value="seller">
        <input required placeholder="Enter Username" type="text" name="user" />
        <input required placeholder="Enter Password" type="password" name="pwd" />
        <div class="btn-div">
          <button class="submit-btn" type="submit" name="submit">
            Sign In
          </button>
        </div>
      </form>
    </div>
    <div class="changeform">
      <h3>Are you a Buyer?</h3>
      <a class = "formlink1" href="./buyer-signin.php">Buyer Sign In</a>
      <p class = "reg">Not a Member yet? <a href="signup.php" class = "formlink2" >Sign Up Now!</a></p>
    </div>
  </div>
  
</section>

<?php include("footer.php"); ?>