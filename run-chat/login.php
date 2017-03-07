<?php
 include "db.php";
  
 if(isset($_POST['sign-in']))
 {
 $username=$_POST['username'];
 $password=$_POST['password'];

 $sql="select * from `user` where `username`='$username' and `password`='$password'";
$result = mysqli_query($con, $sql);
$q=mysqli_num_rows($result);
if($q!=0)
{
echo "success";
}
else
{
echo "failed";
}
 }
 ?>