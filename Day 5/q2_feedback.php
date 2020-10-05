<html>
<h1>Feedback Form</h1>
<form action="q2_feedback" method="POST">
	Name     : <input type="text" name="name" placeholder="Name"><br><br>
	Email ID : <input type="text" name="useremail" placeholder="Your Email"><br><br>
	<textarea name="feedback" ></textarea><p>
	<input type="submit" name="submit">
</form>
</html>

<?php
if(isset($_POST['submit'])){
	@$username = $_POST['name'];
	@$useremail = $_POST['useremail'];
	@$feedback = $_POST['feedback'];
	@$subject = "Feedback";
	@$message = "Thank you for your feedack !";
	@$admin_log = "NAME : $username <br>EMAIL-ID : $useremail<br>MESSAGE : $message";
	mail($useremail, $subject, $message);

	echo "Mail sent successfully to the user";

	mail("tomcyth19ce@student.mes.ac.in", "New Feedback", "$admin_log");
	echo $admin_log;
}
else

	die("Check Username and User Email ID")
?>