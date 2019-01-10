<?php 

	session_start();
	if(isset($_GET['sort'])) {
		if($_GET['sort'] == "asc"){
			$_SESSION['sort'] =" ORDER BY price ASC";
		} else {
			$_SESSION['sort'] =" ORDER BY price DESC";
		}
	}
	//goes to the page that called this file
	header("Location: " . $_SERVER["HTTP_REFERER"]);
 ?>