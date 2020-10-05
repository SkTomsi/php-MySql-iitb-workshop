<form action = "q3_file_upload.php" method="POST" enctype="multipart/formdata">
	<input type="file" name = "myfile"><br>
	<input type="submit" name="SUBMIT">
</form>
<?php

@$name= $_FILES["myfile"]["name"];
@$type= $_FILES["myfile"]["type"];
@$size= $_FILES["myfile"]["size"];
@$temp= $_FILES["myfile"]["tmp_name"];
@$error= $_FILES["myfile"]["error"];


if($error>0)
{
	die("Error while uploading file! $error.");	
}
else
{
	move_uploaded_file($temp,$name);
		echo "Upload Completed successfully!";
		echo "<br>"."$name"."<br>";
		echo "$type";

}

?>