<?php
session_start();
if(@$_SESSION['name'])
	echo "<h2>Welcome , ".$_SESSION['name']."!
<h4>
Click the link below to get results.</h4><h4>
<a href = 'result.php'>Result</a></h4></h2><br><p>
<a href = 'logout_user.php'>Logout</a><br><br>
<a href = 'changeuserpassword.php'>Change Password</a>";
else
	die("You must be logged in.") 
?>


