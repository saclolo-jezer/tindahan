<?php 
	require_once './connect.php';
	$firstname = $_POST['firstname'];
	$sql = "SELECT * FROM users WHERE firstname = '$firstname'";
	$result = mysqli_query($conn, $sql);
 ?>