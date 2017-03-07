<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $q=mysqli_query($con,"INSERT INTO `user` (`username`,`password`,`email`,`id`) VALUES ('$username','$password','$email','')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>