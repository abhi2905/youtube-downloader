<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();

echo "Account logged out";

 
// Redirect to login page
header("location: http://localhost/utubehubsgi/front.php");
exit;
?>