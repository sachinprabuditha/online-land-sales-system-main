<?php
    // Dynamic Header
    $title = 'Admin Sign in'; include("header.php");
    include_once('./config/isSigninConfig.php');
?>

<link rel="stylesheet" href="./css/adminSignin.css">

 <section>
    <div class="login-form">
        <form action="./config/adminSigninConfig.php" method="post">
        <h1 class="main-title">Admin Sign in Page</h1>
        <h3>Hi Admin Welcome Back</h3><br>
        <input class = "login" required placeholder="Username" type="text" name="user"><br>
            <input class = "login" required placeholder="Password" type="password" name="pwd"><br>
            <br>
            <br>
            <button class="submit-btn" type="submit" name="submit">Login</button>
        </div>
      </form>
    </div>

</section>

<?php include("footer.php"); ?>