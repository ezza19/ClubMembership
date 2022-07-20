<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="styleG.css">
</head>
<body>
     <form action="loginAdmin.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Admin ID</label>
     	<input type="text" name="admin_id" placeholder="Admin ID"><br>

     	<label>Password</label>
     	<input type="password" name="admin_password" placeholder="Password"><br>

     	<button type="submit" formaction="loginAdmin.php">Login</button>
     </form>
</body>
</html>