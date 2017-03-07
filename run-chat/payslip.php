<?php
include "db.php";
$data=array();
session_start();
$q=mysqli_query($con,"select mon.month,sal.basic_salary,sal.salary_id,sal.date,sal.year from month as mon inner join salary as sal on sal.month_id=mon.id inner join user as urs on urs.id=sal.eid where urs.username='$_GET[id]'");
while ($row=mysqli_fetch_assoc($q)){
  

 ?>
 <div class="list card" >

  <div class="item item-avatar" ><img src="/home/ajax/First/www/ion.jpeg"><a class='item item-icon-right item-divider' href='view.html?id=<?php echo $row['salary_id']; ?> &title=<?php echo $row['basic_salary']; ?> &duration= <?php echo $row['date']; ?>&memo=<?php echo $row['month']; ?>&from=<?php  echo $row['month'];?> '><span><?php echo $row['month']; ?></span></a></div>

 </div>
 
<?php
session_unset();
}

?>
<!--
philippians 4:13
-->