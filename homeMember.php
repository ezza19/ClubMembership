<?php 
session_start();

if (isset($_SESSION['member_id']) && isset($_SESSION['member_id'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['member_name']; ?></h1>
     <a href="logoutMember.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: indexMember.php");
     exit();
}
 ?>