<?php
session_start();
ob_start();
include("db.php");

if (isset($_SESSION["email"])) {
	header("Location: dashboard.php");
}else{


	if (isset($_POST['login'])) {

		$email = $_POST['email'];
		$password = $_POST['password'];


		if (empty($email) or empty($password)) {
			$result = "All fields are required fields";
		}else if (strlen($password) < 6) {
			$result = "password too short";
		}
		else{
			$query = "SELECT * FROM admin where email='$email' && password='$password'";
			$result = mysqli_query($con, $query);
			if (mysqli_num_rows($result) == 1) {
				while ($arr=mysqli_fetch_array($result)) {
					$email = $arr["email"];
					$password = $arr["password"];

					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;

					header("Location: dashboard.php");
				}
			}
			else{
				echo "<script>alert('Invalid login details!!')</script>";;
			}
		}
	}







?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Login
</button>
<!-- Modal -->
	<div class="container">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
              	<?php echo "<span style='color: red; font-weight: bolder;'>".@$result. "</span>";   ?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="" method="POST">
        	<label>Email</label>
        	<input type="email" name="email" placeholder="Email" required class="form-control mb-3">
        	<label>Password</label>
        	<input type="password" name="password" placeholder="Password" required class="form-control">
        	<input type="submit" name="login" class="btn btn-primary mt-3">
        </form>
      </div>
    </div>
  </div>
</div>
	</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<?php
}
?>
</body>
</html>
