<?php
include "db.php";
$data=array();
session_start();
$q=mysqli_query($con,"select ad.department_id from ad as ad inner join user as usr on ad.id=usr.id where usr.username='$_GET[id]'");
while ($row=mysqli_fetch_assoc($q)){
  $_SESSION['id']= $row['department_id'];

//$me=$_GET['id'];
//$try=$_SESSION['id'];
$q=mysqli_query($con,"select distinct dm.dmemo,dm.dmemo_title,dm.dmemo_from,dm.dmemo_date,dm.dmemo_id from user as urs inner join ad as ad on urs.id=ad.id inner join dmemo as dm on dm.department_id=ad.department_id where ad.department_id='$_SESSION[id]'");
while ($row=mysqli_fetch_assoc($q)){
 //echo $row['memo_title'];
 ?>
 <div class="list card" >

  <div class="item item-avatar" ><img src="http://localhost/run-chat/ion.jpeg"><a class='item item-icon-right item-divider' href='templates/form.html?id=<?php echo $row['dmemo_id']; ?> &title=<?php echo $row['dmemo_title']; ?> &duration= <?php echo $row['dmemo_date']; ?>&memo=<?php echo $row['dmemo']; ?>&from=<?php  echo $row['dmemo_from'];?> '><span><?php echo $row['dmemo_title']; ?></span></a><p><?php echo $row['dmemo_date']; ?></p> </div>

 </div>
 
<?php
session_unset();
}
}
?>
<!--
philippians 4:13
-->