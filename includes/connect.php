<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connect_errno . ')'
		. $mysqli->connect_error);
}
else{
	//echo "connection made";
}
$mysqli->close();
?>