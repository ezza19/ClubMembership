<?php

$sname= "localhost";
$admin_id= "root";
$admin_password = "";

$db_name = "clubsystem";

$conn = mysqli_connect($sname, $admin_id, $admin_password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}