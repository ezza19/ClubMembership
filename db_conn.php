<?php

$sname= "localhost";
$member_id= "root";
$member_password = "";

$db_name = "clubsystem";

$conn = mysqli_connect($sname, $member_id, $member_password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}