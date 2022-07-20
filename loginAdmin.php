<?php 
session_start(); 
include "db_connA.php";

if (isset($_POST['admin_id']) && isset($_POST['admin_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$admin_id = validate($_POST['admin_id']);
	$pass = validate($_POST['admin_password']);

	if (empty($admin_id)) {
		header("Location: indexAdmin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: indexAdmin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM admin WHERE admin_id='$admin_id' AND admin_password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['admin_id'] === $admin_id && $row['admin_password'] === $pass) {
            	$_SESSION['admin_id'] = $row['admin_id'];
            	$_SESSION['admin_password'] = $row['admin_password'];
            	$_SESSION['admin_email'] = $row['admin_email'];
				
            	header("Location: homepageAdmin.php");
		        exit();
            }else{
				header("Location: indexAdmin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: indexAdmin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: indexAdmin.php");
	exit();
}