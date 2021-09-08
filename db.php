<?php
$host = "s465z7sj4pwhp7fn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "gd17z93rjeg3iffv";
$password = "v7ktnnaxzfql0qj2";
$db = "t13fl29hofjsr8xw";

$con = mysqli_connect($host, $user, $password, $db);

if (!$con) {
	die("unable to connect to datebase");
}
else{
	// echo "database connected successfully";
}











?>
