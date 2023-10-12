<?php
    // Dynamic Header
    $title = 'Buyer Sign In'; include("header.php");

    // isLogin
    include_once('./config/isSigninConfig.php');
?>

<!-- CSS -->
<link rel="stylesheet" href="./css/buyer-signin.css" />

<section class="lg-container">
  <div class="login">
    <h1 class="main-title"><u>Buyer</u> Sign In</h1>
    <div class="login-form">
      <form action="./config/signinConfig.php" method="post">
        <input type="hidden" name="user_type" id="users" value="buyer">
        <input required placeholder=" Enter Username" type="text" name="user"/>
        <input required placeholder="Enter Password" type="password" name="pwd"/>
        <div class="btn-div">
          <button class="submit-btn" type="submit" name="submit">
            Sign In
          </button>
        </div>
      </form>
    </div>
    <div class="changeform">
      <h3>Are you a Seller?</h3>
      <a class="formlink1" href="./seller-signin.php">Seller Sign In</a>
      <p>Not a Member yet? <a href="signup.php" class = "formlink2" >Sign Up Now!</a></p>
    </div>
  </div>
  <div class="bg-image">
    <img src="./images/signin/buyerlogin.jpg" alt="">
  </div>
</section>

<?php include("footer.php"); ?>
