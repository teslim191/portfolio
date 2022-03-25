<<<<<<< HEAD
<?php
session_start();

if (isset($_SESSION['email'])) {
	session_unset();
	header("Location:Adminlogin.php");
}






=======
<?php
session_start();

if (isset($_SESSION['email'])) {
	session_unset();
	header("Location:Adminlogin.php");
}






>>>>>>> 3a7bebf47cc1b523eca318992fc24c8554b64d4d
?>