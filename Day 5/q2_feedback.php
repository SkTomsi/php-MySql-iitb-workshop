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
if(@$_POST['submit']){
	@$username = $_POST['name'];
	@$useremail = $_POST['useremail'];
	@$feedback = $_POST['feedback'];
	@$subject = "Feedback";
	@$header = "From : tomcy48@gmail.com";
	@$message = "Thank you for your feedack !";
	@$adminmail = "tomcy48@gmail.com";
	@$header1 = "From : $useremail";
	@$message1 = $feedback;
	//@$admin_log = "NAME : $username <br>EMAIL-ID : $useremail<br>MESSAGE : $message";
	mail($useremail, $subject, $message, $header);

	//echo "Mail sent successfully to the user";

	mail($adminmail, "New Feedback from $name", $feedback, $header1);
}


?>