<?php
session_start();
//passing values from the form
$name = $_POST['username'];
$password = strip_tags($_POST['password']);
$encpass = md5($password);
//echo $password;


//check whether the the name and pass is present
if($password && $name){
	require ("connecttostudentdb.php");
	$getdata="SELECT * FROM `login` WHERE username = '$name'";
	$rowquery = mysqli_query($conn,$getdata);
	echo "<br>";
	$numrows = mysqli_num_rows($rowquery);
	//echo $numrows."<br>";

//condition to check the password

	if($numrows != 0){
		while ($row = mysqli_fetch_assoc($rowquery)){
			$dbname = $row['username'];
			$dbpass = $row['password'];
			//echo $dbpass;
			
		}
		//db check
		if($name==$dbname&&$encpass==$dbpass){
		
		//start new session for the logged in user
			$_SESSION['name'] = $name;
		
		//Link to the main page..
			echo "Logged In successfully <br>";
			echo "<br><br>Click <a href= 'usersession.php'>here </a>to visit the user page";
		}

		else
			echo "Incorrect username or password <br><p><a href ='index.html'>Back</a>";
		
	}else
		die("That user does not exist !") ;	
}
else{
	die("<br>Please check the username and the pasword<p><a href = 'index.html'>Back</a>");

}
?>