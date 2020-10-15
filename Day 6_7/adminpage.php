<?php
session_start();

$nameAdmin = $_POST['userNameAdmin'];
$passAdmin = $_POST['adminPass'];
$passAdminEnc = md5($passAdmin);
//echo $passAdminEnc;

if ($nameAdmin&&$passAdmin) {
	require('connecttostudentdb.php');
	$getAdminData = "SELECT * FROM login WHERE username = 'admin'";
	$getAdminData_query = mysqli_query($conn , $getAdminData);
	if ($getAdminData_query) {
		while ($row = mysqli_fetch_assoc($getAdminData_query)) {
			$dbAdminUsername = $row['username'];
			$dbAdminPassword = $row['password'];
			//echo $dbAdminPassword;

		}
		if ($nameAdmin==$dbAdminUsername&&$passAdminEnc==$dbAdminPassword) {
			$_SESSION['name'] = 'admin';
			echo "Welcome , ADMIN.<br><p><a href = 'config.php'>Student Record Config</a>";
			echo "<p><a href = 'index.html'>Click here </a>to go back to the login page ";

		}else
			echo "Incorrect password or username";
	}else
		echo "Error";
}else
	echo "Please fill all fields";
?>

