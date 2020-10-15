<html>
<form action = 'changeuserpassword.php' method = 'POST'>
		<h1>Password Change</h1>
		<input type = 'text' name='oldpass' placeholder = 'Current Password'><p>
		<input type = 'password' name = 'newpass' placeholder ='New Password'><br>
		<input type = 'password' name = 'newpassrepeat' placeholder ='Confirm New Password'><br><p>
		<input type = 'submit' name = 'submitpass' value = 'Change Password'>
</html>

<?php
session_start();
$currentuser = $_SESSION['name'];
if($currentuser){
	if(@$_POST['submitpass']){
		//md5 enc of passwords	
		$olduserpass = md5($_POST['oldpass']);
		$newuserpass = md5($_POST['newpass']);
		$newuserpassrepeat = md5($_POST['newpassrepeat']);
		//test
		//echo "$olduserpass / $newuserpass / $newuserpassrepeat";

		//connect to db
		require('connecttostudentdb.php');
		$getpass = "SELECT `password` FROM `login` WHERE username = '$currentuser'" or die("Error !");
		$passquery = mysqli_query($conn,$getpass);
		$row = mysqli_fetch_assoc($passquery);
		$oldpassdb = $row['password'];
		
		//admin testing
		//echo "<br>db pass ".$oldpassdb."<br>us pass ".$olduserpass;
		//check whether the passwords match
		if($olduserpass==$oldpassdb||$olduserpass==$oldpassdb){
			if ($newuserpass==$newuserpassrepeat&&$newuserpass&&$newuserpassrepeat) {
				echo "Your password has been changed successfully.";
				$updatepass = "UPDATE login SET password = '$newuserpass' WHERE username = '$currentuser'";
				$updatequery = mysqli_query($conn,$updatepass);
				die("success!<br><p><a href='index.html'>Return to the login page.</a>");
			}else{
				echo "Please fill all fields correctly";
			}
		}else{
			echo "Current password doesnt match";
		}
	}
	
}
echo "<p><a href = 'usersession.php'>Click here </a>to go back.";
?>