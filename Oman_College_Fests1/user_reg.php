<?php
include("config.php");

$email=$_POST['txtEmail'];
$password=$_POST['txtPassword'];

$sql = "SELECT * FROM user WHERE Email = '$email' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);


if($count == 1) {
        // session_register("myusername");
         $_SESSION['msg'] = "This email address already register.";
         
         header("location:user_reg1.php");
      }else {
		 $sql = "INSERT INTO user(email,password)
VALUES ('$email','$password')";


if ($db->query($sql) === TRUE)
{
		 header("location:login.php");
}  
          
      }


/*
else {
	($db->query($sql) === False )
   header("Location:user_reg.html");
}
*/
?>