<?php
session_start();

if (isset($_SESSION['email'])) {
	session_unset();
	header("Location:Adminlogin.php");
}






?>