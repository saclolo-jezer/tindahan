<?php 

$host = 'db4free.net';
$username = 'tindahan';
$password = 'tindahan1000';
$dbname = 'tindahan_db';

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
	die('connection failed' . mysql_error($conn));
}

// echo 'connect';
// var_dump($conn);

 ?>