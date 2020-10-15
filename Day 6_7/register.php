<html>
<form action="register.php" method="POST">
	<h1>Student Registration</h1>
<table>
	<tr>
		<td>Full name :</td>
		<td><input type="text" name="fullname" ></td>
	</tr>
	<tr>
		<td>Roll no :</td>
		<td><input type="number" name="rollNo" ></td>
	</tr>
	<tr>
		<td>Username :</td>
		<td><input type="text" name="Username" ></td>
	</tr>
	<tr>
		<td>Email ID :</td>
		<td><input type="text" name="email" ></td>
	</tr>
	<tr>
		<td>New Password :</td>
		<td><input type="Password" name="pass"></td>
	</tr>
	<tr>
		<td>Re-enter New Password :</td>
		<td><input type="Password" name="repass"></td>
	</tr>
</table>
<p>
	<input type="submit" name="reg" value="Register">
</p>
</form>
</html>

<?php
if(isset($_POST['reg'])){
	$fullname = strip_tags($_POST['fullname']);
	$regusername = strip_tags($_POST['Username']);
	$regpass = strip_tags($_POST['pass']);
	$repeatregpass = strip_tags($_POST['repass']);
	$rollNo = strip_tags($_POST['rollNo']);
	$emailID = $_POST['email'];
	//testing
	//echo "$fullname / $regusername / $regpass / $repeatregpass / $emailID";
	//existence check 
	if($fullname and $regusername and $regpass and $repeatregpass){
		$regpass_enc = md5($regpass);
		$repeatregpass_enc = md5($repeatregpass);
		if($regpass_enc==$repeatregpass_enc){
			if(strlen($fullname) >25 || strlen($regusername) >25){
				echo "<br>Username or Fullname is too long !";
			}else
				if(strlen($regpass)>25 || strlen($regpass) < 3){
					echo "<br>Password shud be 8 - 25  characters long";
				}else{
					require('connecttostudentdb.php');
					$getdata="SELECT * FROM `login` WHERE username = '$regusername'";
					$rowquery = mysqli_query($conn,$getdata);
					echo "<br>";
					$numrows = mysqli_num_rows($rowquery);
						if($numrows == 0){
							$newreg = "INSERT INTO `login`(`id`,`username`,`name`,`rollno`, `password`, `email`) VALUES (NULL,'$regusername','$fullname','$rollNo','$regpass_enc','$emailID')";
							$regquery = mysqli_query($conn,$newreg);
							echo "<br>Registered";
							die("<p><a href ='index.html'>Click here</a> to go back to the login page.");
						}else{
							echo "That username already exits , Please choose a different username";	
				}
			}


		}else
			echo "<br>Your passwords do not match !";

				
	}else{
		echo "<br>Please fill all fields !";
	}
}
die("<p><a href ='index.html'>Click here</a> to go back to the login page.");
?> 