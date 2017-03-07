
 <?php
if(isset($_POST['submit'])){
    echo $_POST['department_name'];
}elseif($_POST['submit1']){
     echo $_POST['department_id'];
    
}


?>
<form method="post" action="winsert.php">
Department_name <input type="text" name="department_name" >
<input type="submit" name="submit">
    
    
    
</form>
<?php
  include "connect.php";
  if (isset($_POST['submit'])){
    
    $db=connect();
    $sql="insert into department values('$_POST[department_name]','')";
    $result=$db->query($sql);
  }elseif(isset($_POST['submit1'])){
    $db=connect();
    $sql="insert into ad values('','$_POST[department_id]','$_POST[id]')";
    $result=$db->query($sql);
    
  }
    ?>
  }

<form method="post" action="winsert.php">
Department_id <input type="text" name="department_id" >
id <input type="text" name="id" >
<input type="submit" name="submit1">
    
    
    
</form>
