<?php
session_start();
if ($_SESSION['status']=='on'){
$title='Department_memo';
include "head.php";
//philippians 4:13
 include "include/connect.php";
include "sidem.php";
if(isset($_POST['submit'])){
$date= date("Y-m-d");
    $_SESSION['memo_title']=stripslashes(mysql_real_escape_string($_POST['memo_title']));
    $_SESSION['memo']=stripslashes(mysql_real_escape_string($_POST['memo']));
     if (empty($_SESSION['memo_title'] )AND empty($_SESSION['memo'] ) ){
       $_GET['errs']='pls filling the spaces';
      
    }
    else if (empty($_SESSION['memo'] )){
       $_GET['errs']= "Filling the memo space";
       
        
    }
    else if (empty($_SESSION['memo_title'] )){
        $_GET['errs']="Filling the memo_title space";
    
        
    }
    
    else{
      
        $db1=connect();
    $sql1="insert into dmemo values('$_SESSION[memo]','$_SESSION[memo_title]','$_SESSION[username]','$date','  $_SESSION[department_id]','')";
    $result=$db1->query($sql1);
    
        $_GET['errs']='Memo Sent';
    
    
            
        }
        
        
    }
    
?>
    
									</td>
									<td valign="top" width="770">
										<table width="100%" border="0" cellpadding="0" cellspacing="0">
											<!--DWLayoutTable-->
											<tbody><tr>
												<td colspan="3" height="30" valign="top">
													<table width="100%" border="0" cellpadding="0" cellspacing="0">
														<!--DWLayoutTable-->
														<tbody><tr>
															<td height="30" valign="top" width="760">
																<img src="css/spacer-top.png" alt="nimasa top spacer" height="30" width="770">
															</td>
														</tr>
													</tbody></table>
												</td>
											</tr>
											<tr>
												<td height="24" width="30">&nbsp;</td>
												<td rowspan="3" valign="top" width="710">
													<div class="contentMain">
														<div class="Pcontent txt-body">
															<div class="newsH">
																<div class="txt-welcome" style="font-size:15px;">
																	<?php if(isset($_GET['errs'])){ ?>
																	<strong style="color: red"> 
																	<?php echo $_GET['errs']; }?>
																	</strong>
																	
																</div>
																  
																
				<form action='department_memo.php' method='post'>
  <label>Memo_title</label>
  <input type="text" name="memo_title">
  <label >Memo_info</label>
  <textarea type="text"  name="memo" rows="20" cols="100"></textarea>
     <input type="submit" name="submit" value="send">
</form>
															</div>
														</div> 
													</div>
												</td>
												<td width="30">&nbsp;</td>
											</tr>
											<tr>
												<td height="180" valign="top">
													<table width="100%" border="0" cellpadding="0" cellspacing="0">
														<!--DWLayoutTable-->
														<tbody><tr>
															<td height="170" valign="top" width="30">
																<img src="css/spacer-topside.png" alt="nimasa homepage spacer" height="150" width="30">
															</td>
														</tr>
												  
													</tbody></table>
												</td>
												<td valign="top">
													<table width="100%" border="0" cellpadding="0" cellspacing="0">
														<!--DWLayoutTable-->
														<tbody><tr>
															<td height="200" valign="top" width="30">
																<img src="css/spacer-topside.png" alt="nimasa homepage spacer" height="180" width="30">
															</td>
														</tr>
													</tbody></table>
												</td>
											</tr>
											<tr>
												<td height="180">&nbsp;</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td height="10"></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td height="40"></td>
												<td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
	<!--DWLayoutTable-->
	
    
</html>
<?php

include "footer.php";
}
else{
    header('location:../index.php');
}
?>