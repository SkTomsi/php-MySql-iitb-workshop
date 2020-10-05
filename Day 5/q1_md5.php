<html>
<h2>User Register</h2>
<form action="q1_md5.php" method="POST" >
	<input type="text" name="username" placeholder="UserName"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="submit" name="login" value="LOGIN">
</form>
</html>


<?php
require ("connecttodata1.php");

@$username = $_POST['username'];
@$password = $_POST['password'];

if(empty($username) || empty($password)){
	echo "Username and password are required";
	}
	else
	{
		@$password_enc = md5($password);
		$write = "INSERT INTO `userdetails`(`id`, `username`, `password`) VALUES (NULL,'$username','$password_enc')";
		if ($conn->query($write) === TRUE) {
        echo "Registered successfully";
      	} else {
        	echo "Error: " . $write . "<br>" . $conn->error;
    }
}
$conn->close();	
?>
