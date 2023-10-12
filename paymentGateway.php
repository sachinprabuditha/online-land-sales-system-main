<?php 

 $title = 'Payment'; include("header.php");
    // Check if user is a buyer
    include("./buyer/buyerConfig.php");
?> 
    <link rel="stylesheet" href="./css/paymentGateway.css">

<?php 

    $landID = $_GET["id"];
    $buyerID = $_SESSION["id"];
?>
<div class="container">

    <form action="./thankyou.php" method= "POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <input type="text" name= "landID" value = '<?php echo "$landID"?>' hidden>
                <input type="text" name= "buyerID" value = '<?php echo "$buyerID"?>' hidden>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name= "fullName" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name = "address" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" required>
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="./images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    
    
<?php 

include("footer.php");

?> 