<?php 
session_start();
include "db_conn.php";
include "navbaradmin.php";

 ?>
<!DOCTYPE html>
<html>
<head>
		<title>Profile Page</title>
		
		
		<style type="text/css">
		body {
			background: #DBABF0;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			height: 80vh;
		}
		
		wrapper
		{
			width:400 px;
			margin: 0 auto;
			background-color:white;
		}
		.button {
			  background-color: #FF7F50;
			  border: none;
			  color: white;
			  padding: 15px 32px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 16px;
			  margin: 4px 2px;
			  cursor: pointer;
		}
		
		</style>
</head>
		<body style="background-color:#F5DEB3">
		<h1 style="text-align: center;">Administrator</h1><br><br>
			<center><img src="admin.png" alt="Trulli" width="160" height="140"></center><br><br>
			<center><h3>Welcome, Admin</h3></center><br><br>

		
		<center>
			<?php
			echo "<center>";
			echo "<b>";
			echo "<table class='table'>";
			
					echo "<tr>"; 
						echo "<td>Admin ID:</td>";
					echo "<td>";
						echo $_SESSION['admin_id'];;
					echo "</td>";
				echo "</tr>";
				
				
				echo "<tr>"; 
						echo "<td>Admin Email:</td>";
					echo "<td>";
						echo $_SESSION['admin_email'];;
					echo "</td>";
				echo "</tr>";
				
				
				
				
			echo "</table>";
			echo "</b>";
			echo "</center>";
			?>
			<a href="editprofileadmin.php" class="button">Edit Profile</a>
			</center>
			
		
</body>
</html>
