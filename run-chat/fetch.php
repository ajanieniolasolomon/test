<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select id,username,email from `user` where username='$_GET[id]'");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
 