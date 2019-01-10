<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ecomm_db';

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
	die('connection failed' . mysql_error($conn));
}

// echo 'connect';
// var_dump($conn);

 ?>