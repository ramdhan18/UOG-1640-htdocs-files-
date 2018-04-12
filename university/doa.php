<?php
function connectDB(){
	$host = 'localhost';
	$user = 'root';
	$passwd = '18122000';
	$database = 'university';
	// connect to database
	$connect = mysqli_connect($host,$user,$passwd,$database);
	// check db connection
	if (!$connect) {
		die("Connection failed. ". mysqli_connect_error);
	}
	return $connect;
}
?>
