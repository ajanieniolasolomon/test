<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select memo,memo_id,memo_from,memo_date,memo_title from `gmemo` order by memo_date");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
