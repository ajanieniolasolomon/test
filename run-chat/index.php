<?php
//philippians 4:13
$title='login';
include "head.php";
include ('include/connect.php');
if (isset($_POST['submit'])){
    session_start();
    $_SESSION['username']=stripslashes(mysql_real_escape_string($_POST['name']));
    $_SESSION['password']=stripslashes(mysql_real_escape_string($_POST['password']));
     if (empty($_SESSION['username'] )AND empty($_SESSION['password'] ) ){
        header("Location:index.php?err=".urlencode("Filling this space"));
       session_unset(); 
    }
    else if (empty($_SESSION['username'] )){
        header("Location:index.php?err=".urlencode("Filling the username space"));
         session_unset(); 
        
    }
    else if (empty($_SESSION['password'] )){
        header("Location:index.php?err=".urlencode("Filling the password space"));
         session_unset(); 
        
    }
    
    else{
        
        $db=connect();
        $sql="SELECT distinct ur.username,ur.password,ad.level,ad.department_id FROM user as ur inner join ad as ad on ur.id=ad.id  where ur.username='$_SESSION[username]' and ur.password='$_SESSION[password]' and ad.level >= 15; ";
        $result=$db->query($sql);
        if ($row=$result->fetch_assoc()){
            $_SESSION['level']=$row['level'];
            $_SESSION['department_id']=$row['department_id'];
            $_SESSION['status']='on';
             header("Location:admin/index.php");
               
            
        }
        else{
            header("Location:index.php?err=".urlencode("you dont have access to this level"));
           
        }
        
    }
    
}


?>
    
  
					<tr>
						<td height="500" valign="top">
							<table width="100%" bgcolor="#fdfefe" border="0" cellpadding="0" cellspacing="0">
								<!--DWLayoutTable-->
								<tbody><tr>
									
									<td valign="top" width="770">
										<table width="100%" border="0" cellpadding="0" cellspacing="0">
											<!--DWLayoutTable-->
											<tbody><tr>
												<td colspan="3" height="30" valign="top">
													<table width="100%" border="0" cellpadding="0" cellspacing="0">
														<!--DWLayoutTable-->
														<tbody><tr>
															<td height="10" valign="top" width="760">
																<img src="css/spacer-top.png" alt="nimasa top spacer" height="10" width="770">
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
                                                                    <?php if(isset($_GET['err'])){ ?>
																	<strong style="color: red"> 
																	<?php echo $_GET['err']; ?>
																	</strong>
																	<?php } ?>
																</div>
																  
																<div class="noOp" id="tooltip1" style="width:500px; margin-left:50px;"> 
																	<table width="100%" border="0">
																		<tbody><tr>
																			<td valign="top" width="90%">
																				<div class="login_fields">
                                                                                    
																							
		
				<form action='index.php' method='post'>
  <label for="fname">Staff Id</label>
  <input type="text" id="fname" name="name">
  <label for="lname">Password</label>
  <input type="password" id="lname" name="password">
     <input type="submit" name="submit" value="login">
</form>
																						</div>
																			</td>
																		</tr>
																	</tbody></table>  
																</div>
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
	
<?php

include "footer.php";

?>