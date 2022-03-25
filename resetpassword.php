<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'db.php';

if (isset($_POST['email'])) {
 $code = uniqid(true);
 $emailTo = $_POST['email'];

    $sql = "INSERT INTO resetpassword(code, email) VALUES ('$code','$emailTo')";
    $query = mysqli_query($con, $sql);
    if (!$query) {
        exit("error");
    }
//Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'teslimjimoh191@gmail.com';                     //SMTP username
    $mail->Password   = 'youngmoney';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('teslimjimoh191@gmail.com', 'skyNet');
    $mail->addAddress('teslimjimoh191@gmail.com');     //Add a recipient
    $mail->addReplyTo('no-reply@gmail.com', 'No reply');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<div class='alert alert-success'>Reset password link has been sent to your email</div>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
// to avoid multiple submission
exit();
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container text-center" style="width: 50%;">
<form action="" method="POST" enctype="">
	<label>Enter email address:</label>
	<input type="email" name="email" class="form-control" placeholder="Email">
	<input type="submit" name="submit" value="Reset email" class="btn btn-primary mt-3">
</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>