<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "portfolio";

$con = mysqli_connect($host, $user, $password, $db);

if (!$con) {
	die("unable to connect to datebase");
}
else{
	// echo "database connected successfully";
}











?>