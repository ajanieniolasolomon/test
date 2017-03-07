<?php
function connect(){ header("Access-Control-Allow-Origin: *");
$db=new mysqli("localhost","solomon","","run_chat");//function that connect php the database
return $db;

}

?>