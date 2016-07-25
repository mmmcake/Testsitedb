<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fix 'n' Run</title>
		<link rel="stylesheet" type="text/css" href="Styles/style.css" />
	</head>
	<body>
		<div id="Wrapper">
			<div id="TopBar">
				<div id="login">
					You are logged in as :- <b><i>Technician</i></b>  Not Technician ?  <a href="HomeG.php"><b><i>Logout</i></b></a>
				</div>
			</div>
			
			<div id="Main">
				<div id="Header">
					<img src="Images/Header.png" alt="some_text" class="Headerimg"/> 
				</div>
				
				<div id="Nav">
					<a href="HomeT.php"><img src="Images/Homebtn.gif" alt="some_text"/></a><a href="AboutusT.php"><img src="Images/AUbtn.gif" alt="some_text"/></a><a href="SupportT.php"><img src="Images/Supportbtn.gif" alt="some_text"/></a><a href="ContactusT.php"><img src="Images/CUbtn.gif" alt="some_text"/></a><a href="Jobs.php"><img src="Images/Jobsbtn.gif" alt="some_text"/></a><img src="Images/ROBar.gif" alt="some_text"/>
				</div>
				
				<div id="Body">
					<div id="BodyLeft">
						<div id="Jobbox">
							<p><u>Job List</u></p>
							<hr>
							<p>Job ID - <a href="">GF87E-EFE85-85SE-8S5E6-5EF</a></p>
							<p>Status - Ongoing</p>
							<p>Assigned By - Admin</p>
							<hr>
						</div>
					</div>
					
					<div id="BodyRight">
						<div id="BRcontent">
							<p>Job ID - GF87E-EFE85-85SE-8S5E6-5EF</p>
							<p>Status - Ongoing</p>
							<p>Assigned By - Admin</p>
							<br>
							<p>Error Subject - "Computer Won't Start"</p>
							<p>Details - The computer will not start the monitor doesn't power up and the computer itself doesn't turn on.</p>
							<input type="text" name="fname" class="joboxid">
							<input type="button" value="Update">
						</div>
					</div>
				</div>
				
				<div id="Footer">
					<p class="foottext">Copyright &copy; Ainsley Andrews. All rights reserved.<br><?php
					
						//function to detect a user's browser type
						function getBrowser()
						{
							$u_agent = $_SERVER["HTTP_USER_AGENT"];
							$ub = "";
							/*preg_match() is a php function that will look for a match within a string. It will only match once even if it finds multiple matchs in a string.*/
							if (preg_match("/Opera/i",$u_agent))
							{
								$ub = "Your browser is Opera";
							}
							elseif (preg_match("/Firefox/i",$u_agent))
							{
								$ub = "Your browser is Firefox";
							}
							elseif (preg_match("/MSIE/i",$u_agent))
							{
								$ub = "Your browser is Internet Explorer";
							}
							elseif (preg_match("/Chrome/i",$u_agent))
							{
								$ub = "Your browser is Chrome";
							}
							else 
							{
								Echo "Go download a decent browser you fool";
							}
							return $ub;
						}
				
						echo getBrowser();
					?></p>
				</div>
			</div>
		</div>
	</body>
</html>