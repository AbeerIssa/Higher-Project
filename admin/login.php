<?php
include("config.php");
 session_start();

 $myusername = mysqli_real_escape_string($db,$_POST['txtemail']);
      $mypassword = mysqli_real_escape_string($db,$_POST['txtPassword']); 
      
$sql = "SELECT * FROM 	admin WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_admin'] = $myusername;
         
         header("location:event_registeration2.html");
      }else {
          header("location:login.html");
      }
?>