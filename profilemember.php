<?php 
session_start();
include "db_conn.php";
include "navbarmember.php";

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
			height: 90vh;
		}
		
		.wrapper
		{
			width:200px;
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
		
		
		<h1 style="text-align: center;">My Profile</h1>
			
			<center><img src="welcomeimages.png" alt="Trulli" width="160" height="140"></center><br>
						<center><h3>Welcome, <?php echo $_SESSION['member_name']; ?></h3></center><br>
		<center>
			<?php
			echo "<center>";
			echo "<table class='table'>";
			
				echo "<tr>"; 
						echo "<td>Member ID:</td>";
					echo "<td>";
						echo $_SESSION['member_id'];;
					echo "</td>";
				echo "</tr>";
				
				echo "<tr>"; 
						echo "<td>Name:</td>";
					echo "<td>";
						echo $_SESSION['member_name'];;
					echo "</td>";
				echo "</tr>";
				
				
				echo "<tr>"; 
						echo "<td>Phone Number:</td>";
					echo "<td>";
						echo $_SESSION['member_phonenum'];;
					echo "</td>";
				echo "</tr>";
				
				echo "<tr>"; 
						echo "<td>Email:</td>";
					echo "<td>";
						echo $_SESSION['member_email'];;
					echo "</td>";
				echo "</tr>";
				
				echo "<tr>"; 
						echo "<td>Club:</td>";
					echo "<td>";
						echo $_SESSION['club_type'];;
					echo "</td>";
				echo "</tr>";
				
				echo "<tr>"; 
						echo "<td>Status:</td>";
					echo "<td>";
						echo $_SESSION['member_status'];;
					echo "</td>";
				echo "</tr>";
				
			echo "</table>";
			echo "</center>";
			echo "<br>";
			echo "<br>";
			?>
			
			<a href="editprofilemember.php" class="button">Edit Profile</a>
			<a href="schedule.html" class="button">Schedule</a>
			</center>
</body>
</html>
