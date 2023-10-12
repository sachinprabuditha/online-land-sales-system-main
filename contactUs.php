<html lang="en">
<head>
	<meta charset="utf-8">
    <?php 
    $title = 'Contact Us'; include("header.php");
    ?> 

<link rel="stylesheet" href="./css/contactUs.css">

</head>

 
	
<body>

<div class="main_title">
    <h1>Contact US</h1>
</div>
<div class=contactUs> 
  <form id="myForm" method="post" action="./config/contactUsConfig.php">
    
    <div class="input_field">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your Name" required>
    </div>

    <div class="input_field">
    <label for="Email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email"  required>
    </div>

    <div class="input_field">
	<label for="phone">Mobile Number</label>
	<input type="text"  id="mobile" name="mobile" placeholder="Your phone number"  pattern="[0-9]{10}" required>
    </div>
    
    <div class="input_field">
    <label for="subject">Messege</label>
    <textarea id="message" name="message" placeholder="Type your Messege here..." required></textarea>
    </div>

    <div class="input_field">
    <input type="submit" class="btn" name="Submit" value="SUBMIT"/>
    </div>
	

  </form>

</div>
	

<?php include("footer.php"); ?>







