<?php
include "db.php";
$date=date("h:i:sa");
session_start();
/*
$q1=mysqli_query($con,"select ad.department_id from ad as ad inner join user as usr on ad.id=usr.id where usr.username='$_GET[id]'");
while ($row=mysqli_fetch_assoc($q1)){
  $_SESSION['id']= $row['department_id'];
}
*/


$q=mysqli_query($con,"select ch.message,ch.message_from from user as urs inner join ad as ad on urs.id=ad.id inner join chat as ch on ch.department_id=ad.department_id where ad.department_id=$_SESSION[id] and urs.username='$_GET[id]'");
while ($row=mysqli_fetch_assoc($q)){
  echo "
      
                      <div class='chat-bubble right'>
      
                          <div class='message' >
                           ".$row['message']."
                          </div>
      
                          <div class='message-detail'>
                              <span 
                                  class='bold'>".$row['message_from']."</span>,
                              
                          </div>
      
                      </div>"; ?>
<?php

}

?>
<!--
philippians 4:13
-->