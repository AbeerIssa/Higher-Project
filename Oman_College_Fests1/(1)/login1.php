<?php
include("config.php");
 session_start();

 $myusername = mysqli_real_escape_string($db,$_POST['txtemail']);
      $mypassword = mysqli_real_escape_string($db,$_POST['txtPassword']); 
      
$sql = "SELECT * FROM user WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: event registeration.php");
      }else {
         $error = "Your Login Name or Password is invalid";
		 echo $error;
      }
?>