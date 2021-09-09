<?php
session_start();
include "db.php";
$email = $_SESSION['email']; 

if (!isset($_SESSION["email"])) {
	header("Location: Adminlogin.php");
} else {
	// code...




?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fab fa-apple-pay fa-3x"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        </li>
<!--         <li class="nav-item">
          <a class="nav-link" href="post.php">Add Post</a>
        </li>
 -->        <li class="nav-item">
          <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Welcome, Admin</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
</div>
<div class="container my-3">
	<table class=" table table-bordered border-striped">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Message</th>
			<th>Date</th>
			<th>Delete</th>
		</thead>
<?php
 $sql = "SELECT * FROM users";
 $result = mysqli_query($con, $sql);

 if (mysqli_num_rows($result) > 0) {
 	while ($arr=mysqli_fetch_array($result)) {
 		$id = $arr["Id"];
 		$name = $arr["Name"];
 		$email = $arr["Email"];
 		$subject = $arr["Subject"];
 		$message = $arr["Message"];
 		$date = $arr["Date"];


 		echo "
 		<tr>
 		<td>$name</td>
 		<td>$email</td>
 		<td>$subject</td>
 		<td>$message</td>
 		<td>$date</td>
 		<td><a class='btn btn-danger' href='delete.php?Id=$id'>delete</a></td>
 		</tr>

 		";
 	}
 }


?>
	</table>
	
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<?php 
}
?>
</body>
</html>
