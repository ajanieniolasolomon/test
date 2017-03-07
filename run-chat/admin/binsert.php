  <?php
  include "connect.php";
  if (isset($_POST['submit'])){
    
    $db=connect();
    $sql="insert into department values('$department_name','')";
    $result=$db->query($sql);
  }
    ?>