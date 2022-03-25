<<<<<<< HEAD
<?php
ob_start();
include 'db.php';

$id = $_GET['Id'];
$sql = "DELETE from users WHERE Id = '$id'";
if (mysqli_query($con, $sql)) {
	echo "<script>alert('Deleted successfully!!')</script>";
	header("Refresh:0; url=dashboard.php");
} else {
	echo "<h3 style='color: red; font-weight: bolder'>error deleting data</h3>";
}







=======
<?php
ob_start();
include 'db.php';

$id = $_GET['Id'];
$sql = "DELETE from users WHERE Id = '$id'";
if (mysqli_query($con, $sql)) {
	echo "<script>alert('Deleted successfully!!')</script>";
	header("Refresh:0; url=dashboard.php");
} else {
	echo "<h3 style='color: red; font-weight: bolder'>error deleting data</h3>";
}







>>>>>>> 3a7bebf47cc1b523eca318992fc24c8554b64d4d
?>