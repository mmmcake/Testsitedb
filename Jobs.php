<!DOCTYPE html>
<?php
	session_start();
	$loguser = $_SESSION["loguser"];
	If(!isset($loguser))
	{
		header( 'location: HomeG.php' );
	}
	Else
	{
		
	}
?>
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
					You are logged in as :- <b><i><?php echo $loguser; ?></i></b>  Not <?php echo $loguser; ?> ?  <a href="HomeG.php"><b><i>Logout</i></b></a>
				</div>
			</div>
			
			<div id="Main">
				<div id="Header">
					<img src="Images/Header.png" alt="some_text" class="Headerimg"/> 
				</div>
				
				<div id="Nav">
					<a href="HomeT.php"><img src="Images/Homebtn.gif" alt="some_text"/></a><a href="AboutusT.php"><img src="Images/AUbtn.gif" alt="some_text"/></a><a href="SupportT.php"><img src="Images/Supportbtn.gif" alt="some_text"/></a><a href="ContactusT.php"><img src="Images/CUbtn.gif" alt="some_text"/></a><a href="Jobs.php"><img src="Images/Jobsbtn.gif" alt="some_text"/></a><img src="Images/ROBar.gif" alt="some_text"/>
				</div>
				
				<?php
			//This handles the login authentication
			//set up variables for database connection
			
			$username = "root";
			$password = "";
			$server = "localhost";
			$database = "helpdesk";
			
			//connect to database server
			$con = mysqli_connect($server,$username,$password,$database) or die("error: could not connect");
			
			$Jobids = mysqli_query( $con,"SELECT * FROM jobs" ) or die("error with query");
			$Jobids2 = mysqli_query( $con,"SELECT * FROM jobs" ) or die("error with query");
			
			//release the database connection
			mysqli_close($con); 
		?>
				
				<div id="Body">
					<div id="BodyLeft">
						<div id="Jobbox">
							<p><u>Job List</u></p>
							<p><a href="addjobs.php">Add A Job</a></p>
							<hr>
							<form name = "form123" method = "post" action = "testsearch.php">
							<table border="0">
							<tr>
							
							<input type="text" name="Search" value=""/> 
							
							<input type="submit" value="Search">
							</tr>
							</table>
							</form>
							<div style="width:350px;height:600px;overflow:auto;">
							<?PHP
							echo "<table class='Jobtableleft'>";

							while($row = mysqli_fetch_array($Jobids))
							{
								echo "<tr>";
								echo "<td>" . $row['JobID'] . "</td>";
								echo "</tr>";
							}
							echo "</table>";
							?>
							</div>
						</div>
					</div>
					
					<div id="BodyRight">
						<div id="BRcontent">
						<div style="width:650px;height:600px;overflow:auto;">
						<?php
							echo "<table class='jobtableright'>";
							while($row = mysqli_fetch_array($Jobids2))
							{
								echo "<tr>";
								echo "<td><br></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<th>Job ID - ". $row['JobID'] ."</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<th>Job Status - ". $row['Status'] ."</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<th>Subject - ". $row['Subject'] ."</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<th>Details</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>". $row['Details'] ."</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td><hr></td>";
								echo "</tr>";
							}
							echo "</table>";
							echo "<input type='text' name='fname' class='joboxid'>";
							echo "<input type='button' value='Update'>";
						?>
						</div>
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