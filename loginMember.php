<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['member_email']) && isset($_POST['member_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$member_email = validate($_POST['member_email']);
	$pass = validate($_POST['member_password']);

	if (empty($member_email)) {
		header("Location: indexMember.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: indexMember.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM club_member WHERE member_email='$member_email' AND member_password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['member_email'] === $member_email && $row['member_password'] === $pass) {
            	$_SESSION['member_id'] = $row['member_id'];
            	$_SESSION['member_name'] = $row['member_name'];
            	$_SESSION['member_email'] = $row['member_email'];
				$_SESSION['member_phonenum'] = $row['member_phonenum'];				
				$_SESSION['member_status'] = $row['member_status'];
				$_SESSION['club_type'] = $row['club_type'];
				
				
            	header("Location: homepageMember.php");
		        exit();
            }else{
				header("Location: indexMember.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: indexMember.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: indexMember.php");
	exit();
}