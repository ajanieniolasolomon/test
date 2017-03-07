<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select memo,memo_id,memo_from,memo_date,memo_title from `gmemo` order by memo_date desc");
while ($row=mysqli_fetch_assoc($q)){
 //echo $row['memo_title'];
 ?>
 
  <div class="list card" >

  <div class="item item-avatar" ><img src="ion.jpeg"><a class='item item-icon-right item-divider' href='templates/form.html?id=<?php echo $row['memo_id']; ?> &title=<?php echo $row['memo_title']; ?> &duration= <?php echo $row['memo_date']; ?>&memo=<?php echo $row['memo']; ?>&from=<?php  echo $row['memo_from'];?> '><span><?php echo $row['memo_title']; ?></span></a><p><?php echo $row['memo_date']; ?></p> </div>

 </div>
<?php
}

?>
