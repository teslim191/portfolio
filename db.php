<?php
// $host = "localhost";
// $user = "root";
// $password = "";
// $db = "portfolio";

// $con = mysqli_connect($host, $user, $password, $db);

// if (!$con) {
// 	die("unable to connect to datebase");
// }
// else{
// 	// echo "database connected successfully";
// }

// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);

// $active_group = 'default';
// $query_builder = True;

// $con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);



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
<<<<<<< HEAD




=======
>>>>>>> 3a7bebf47cc1b523eca318992fc24c8554b64d4d
