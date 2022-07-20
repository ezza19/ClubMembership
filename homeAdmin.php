<?php 
session_start();

if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_id'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['admin_id']; ?></h1>
     <a href="logoutAdmin.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: indexAdmin.php");
     exit();
}
 ?>