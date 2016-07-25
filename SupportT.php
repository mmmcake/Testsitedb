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
					<img src="Images/Warning.png" alt="some_text" class="Simg"/> 
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
				
							echo getBrowser() . "<br>";
							?>
							<?php
							/*detect other information about the user
							for example, screen size...*/
			
							/*Use javascript to detect the screen resolution
							and pass the information to PHP*/
							?>
					
							<script language="javascript">
							if (window.location.search == "")
							{
								window.location.href = window.location + "?width=" 
								+ screen.width + "&height=" + screen.height;
							}
							</script>
							<?php
							/*Get the screen size values from javascript
							and use them in PHP*/
							
							$width = $_GET["width"];
							$height = $_GET["height"];
							
							echo "Your screen size is " . $width . " x " . $height . " <br>";
							/*note: you can use the screen size values to
							load a page based on a window size e.g. using CSS */
							
							echo "Other useful information from PHP <br>";
							$curr_page = $_SERVER["PHP_SELF"];
							echo "Your current page is " . $curr_page . "<br>";
							$from_page = $_SERVER["HTTP_REFERER"];
							echo "You came to this page from " . $from_page . "<br>";
							$ip = $_SERVER["REMOTE_ADDR"];
							echo "Your IP address is " . $ip . "<br>";
							
							?>
					</p>
				</div>
			</div>
		</div>
	</body>
</html>