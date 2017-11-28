<?php
  include 'dbconfig.php';
  //determine if they need to see the form or not
 if ($_POST) {
     //trying to subscribe; validate email address
      if ($_POST['email'] == "") {
         header("Location: manage.php");
          exit;
      } 
      else {
         //connect to database
        doDB();

          //check that email is in list
         emailChecker($_POST['email']);

          //get number of results and do action
         if (mysqli_num_rows($check_res) < 1) {
              //free result
              mysqli_free_result($check_res);

            //add record
            $add_sql = "INSERT INTO subscribers (email)
                      VALUES('".$safe_email."')";
            $add_res = mysqli_query($mysqli, $add_sql)
                       or die(mysqli_error($mysqli));
            $display_block = "<p>Thanks for signing up!</p>";

           //close connection to MySQL
            mysqli_close($mysqli);
          } 
              else {
             //print failure message
             $display_block = "<p>You're already subscribed!</p>";
              }
              header('Refresh: 2; URL=http://localhost/utubehubsgi/front.php'); 
      
            }
  }
  ?>
  <!DOCTYPE html>
  <html>
 <head>
  <title>Subscribe to a Mailing List</title>
 </head>
 <body>
 <?php echo "$display_block"; ?>
 </body>
 </html>