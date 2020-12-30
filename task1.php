<?php
$submessage = " ";
if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['PhoneNum']) &&  isset($_POST['receipt'])){
    $to = $_POST['receipt'];
    $subject = 'Form Details';
    $body = "Name ".$_POST['Name']."\n\nEmail ".$_POST['Email']."\n\nPhone Number ".$_POST['PhoneNum'];
    $headers = 'From: vermaneelansh2001@gmail.com';
    if(mail($to,$subject,$body,$headers)){
	    $submessage =  "Details successfully sent to ".$to;
	    
    }
    else{
    	echo "Try Again";
    }

}
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Task Round</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="container">  
    <form id="contact" action="index.php" method="post">
      <h3>Contact Form
      </h3>
      <fieldset>
        <input placeholder="Your name" type="text" tabindex="1" name = "Name" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Your Email Address" type="email" tabindex="2" name = "Email" required>
      </fieldset>
      <fieldset>
        <input placeholder="Your Phone Number" type="tel" tabindex="3" name = "PhoneNum" required>
      </fieldset>
      <fieldset>
        <input placeholder="Email Address to which details to be sent" type="email" tabindex="2" name = "receipt" required>
      </fieldset>
      
      <fieldset>
        <button name="submit" type="submit" id="contact-submit">Submit</button>
      </fieldset>
      <div class = "error"><?php 
          echo $submessage ;
       
      ?></div>
      
    </form>
  </div>
</body>
</html>
