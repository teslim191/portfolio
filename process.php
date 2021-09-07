<?php
include 'db.php';

$name = $email = $subject = $message = "";
$error = array("contactName"=>"","contactEmail"=>"","contactSubject"=>"","contactMessage"=>"");
if (isset($_POST["submit"])) {
	if (empty($_POST["contactName"])) {
		$error["contactName"] = "Name is required";
	}else{
		$name = $_POST['contactName'];
	}
	if (empty($_POST['contactEmail'])) {
		$error["contactEmail"] = "Email is required";
	}else{
		$email = $_POST['contactEmail'];
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error["contactEmail"] = "Email not valid";
	}
	if (empty($_POST["contactSubject"])) {
		$error["contactSubject"] = "Subject is required";
	}else{
		$subject = $_POST["contactSubject"];
	}
	if (empty($_POST["contactMessage"])) {
		$error["contactMessage"] = "Message is required";
	}else{
		$message = $_POST['contactMessage'];
	}

	if (array_filter($error)) {
		  echo "<h3 style='color: red;'>All fields are required!!</h3>";
	}else{
		$sql = "INSERT INTO users(Name, Email, Subject, Message) VALUES ('$name','$email','$subject','$message')";
		if (mysqli_query($con, $sql)) {
			echo "<h3 style='color: deeppink;'>Message sent successfully</h3>";
		} else {
			echo "<h3 style='color: red;'>Error sending Message</h3>";
		}
		
	}
}





?>