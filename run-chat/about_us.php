  <?php
//philippians 4:13
$title='about_us';
include "head.php";
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