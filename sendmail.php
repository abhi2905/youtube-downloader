<?php
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$subject = $_REQUEST['subject'] ;
$name = $_REQUEST['name'] ;

if (!isset($_REQUEST['email'])) {
  header( "Location: feedback.php" );
}

elseif(mail( "housebisht@gmail.com", $subject, $message, "From: $name <$email>" )){
    echo '<p>Your message has been sent!</p>';
  }else { 
    echo '<p>Something went wrong, go back and try again!</p>'; 
}    

?>