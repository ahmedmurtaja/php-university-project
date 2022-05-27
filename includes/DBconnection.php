<?php
$connection = mysqli_connect('localhost', 'root', '', 'webproject');

if (!$connection) {
	echo "Connection Failed";
	die("Connection Failed: " . mysqli_connect_error());
}
?>