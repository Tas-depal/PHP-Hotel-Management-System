<?php
$host_name 	= "localhost";
$username 	= "root";
$password 	= "";
$dbname 	= "goldenstone";
$results_per_page = 4;

$conn = mysqli_connect($host_name, $username, $password, $dbname);
if(!$conn)
{
	echo mysqli_error($conn);
	die();
}
?>