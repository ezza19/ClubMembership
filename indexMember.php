<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="styleG.css">
</head>
<body>
     <form action="loginMember.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="member_email" placeholder="Member Email"><br>

     	<label>Password</label>
     	<input type="password" name="member_password" placeholder="Password"><br>

     	<button type="submit" formaction="loginMember.php">Login</button>
     </form>
</body>
</html>