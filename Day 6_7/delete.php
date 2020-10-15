<html>
<form action="delete.php" method="POST">
<label>Enter the roll no whos RECORD shud be deleted : </label><input type="text" name="rollNo" placeholder="Roll No">
<input type="submit" name="submit" value="Delete">
</form>
</html>
<?php
@$rollNo = $_POST['rollNo'];


if (isset($_POST['submit'])) {
	require("connecttostudentdb.php");
	$getRollNo = "SELECT * FROM login WHERE rollno = '$rollNo'";
	$getRollNo_query = mysqli_query($conn , $getRollNo);
	$numrows = mysqli_num_rows($getRollNo_query);
	if ($numRows = 1 ) {
		
		$deleteRec = "DELETE FROM `login` WHERE `rollno` = $rollNo";
		$deleteRec_query = mysqli_query($conn,$deleteRec);
		echo "Successfully deleted !";

	}else
		echo "<br>Check Roll No";
}
echo "<p><a href = 'config.php'>Admin Home Page</a><br>";
?>