<html>
    <head>
     <title><?php echo $title;//philippians 4:13 ?></title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link type="image/x-icon" rel="icon" href="./css/ion.ico">
				<link type="text/css" rel="stylesheet" href="css/colorbox.css">
				<link type="text/css" rel="stylesheet" href="css/style.css">
				<link type="text/css" rel="stylesheet" href="css/featured.css">
				<link type="text/css" rel="stylesheet" href="css/masastyle.css">
				<link type="text/css" rel="stylesheet" href="css/pagination.css">
							
				<script type="text/javascript" src="css/prototype.js"></script>
				<script type="text/javascript" src="css/functions.js"></script>
				<script type="text/javascript" src="css/jquery-1.js"></script>
				<script type="text/javascript" src="css/jcarousellite_1.js"></script>
				<script type="text/javascript" src="css/jquery.js"></script>
				<script type="text/javascript" src="css/jquery_002.js"></script>
				<script type="text/javascript" src="css/superfish.js"></script>
				<script type="text/javascript" src="css/codes.js"></script>
			</head>
     <body>
				<table width="1000" border="0" cellpadding="0" cellspacing="0" align="center">
					<!--DWLayoutTable-->
					<tbody><tr>
						<td height="130" valign="top" width="1010"><table width="100%" border="0" cellpadding="0" cellspacing="0">
	<!--DWLayoutTable-->
	<tbody><tr>
        <td height="130" valign="top" width="384">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<!--DWLayoutTable-->
				<tbody><tr>
					<td height="130" valign="top" width="384"><a href="index.php"><img src="css/logo-nimasa.png" alt="NIMASA" height="150" width="400" border="0"></a></td>
				</tr>
			</tbody></table>
		</td>
        <td width="800">
		
		</td>
		<td width="800">
			<h2 class="white"><a class="white" href="index.php">NIMASA E-MEMO AND SELF-SERVICE</a> </h2>
		</td>
	</tr>
</tbody></table></td>
					</tr>
					<tr>
							<td width="100%">	<nav>
        <ul class="sf-menu sf-js-enabled">
			<li id="home">
				<a href="index.php"><strong>Home</strong></a>
			</li>                   
			<li class="about-link"><a href="department_memo.php" id="about"><strong>Department Memo</strong></a> <!--
				<ul>
					<li><a href="about.php">About Us</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="about.php">About Us</a></li>
				</ul> -->
            </li>
			<li>
				<a href="staff_memo.php" id="contact"><strong>Staff Memo</strong></a>
			</li>
			<?php  if($_SESSION['username']=='ajani'){ ?>
			            						<li>
							<a href="generalmemo.php" id="contact"><strong>General Memo</strong></a>
						</li>
												<?php } ?>
							</ul>
    <span style="width: 0px; left: 2.1509px; overflow: hidden;" class="menu-hover"></span></nav>
        </td>
					</tr>