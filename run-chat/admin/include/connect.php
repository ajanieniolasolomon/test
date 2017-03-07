<?php
function connect(){ 
$db=new mysqli("localhost","solomon","","run_chat");//function that connect php the database
return $db;

}

?>