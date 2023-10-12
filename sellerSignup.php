<?php
    // Dynamic Header
    $title = 'Seller Sign Up'; include("header.php");
    // is Logged in?
    include("./config/isSigninConfig.php")
?>

<link rel="stylesheet" href="./css/sellerSignup.css">

<section class="su-container">
  <div class="signup">
    <h1 class="main-title">Create a Seller Account</h1>
    <div class="signup-form">
      <form action="./seller/sellerSignupConfig.php" method="post" onsubmit="return checkPassword()">
        <div class="form-row">
          <input class="input_field" required placeholder="Enter First Name" type="text" name="fname" />
          <input class="input_field" required placeholder="Enter Last Name" type="text" name="lname" />
        </div>
        <input class="input_field" required placeholder="Enter Your Email Address" type="text" name="email" />
        <input class="input_field" required placeholder="Enter Username" type="text" name="user" />
        <input class="input_field" required placeholder="Enter Password" type="password" name="pwd" id = "pswd1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}"/>
        <input class="input_field" required placeholder="Re-Enter Password" type="password" name="repwd" id = "pswd2"/>
        <label for="" class="accept">
        <input type="checkbox" id="checkbox" onclick="enableButton()" >Accept Terms and Conditions
        </label>
        <div class="btn-div">
          <button class="submit-btn" type="submit" name="submit" id="btn" disabled>
            Sign Up
          </button>
        </div>
      </form>
    </div>
    <div class="changeform">
        <h3>Are you a Buyer?</h3>
        <a href="./buyerSignup.php">Buyer Signup</a>
        <p>Already a member ? <a href="login.php">Sign In!</a></p>
    </div>
  </div>
</section>

<script src="./js/sellerSignup.js"></script>

<?php include("footer.php"); ?>