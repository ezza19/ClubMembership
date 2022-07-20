<?php 
session_start();
include 'navbarguest.php';

if (isset($_SESSION['member_id']) && isset($_SESSION['member_id'])) {

?>
<!DOCTYPE html>
<html>
<head>
 <title>Club Membership System</title>
 
<style>
body {
			background: #DBABF0;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			height: 150vh;
		}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 350px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>

<header>
</header>

<body style="background-color:LightYellow;">
	<h1><center>Hello, <?php echo $_SESSION['member_name']; ?></center></h1><br><br><br>
	<div id="body">
		<h1><span><center>CLUBS AVAILABLE IN UiTM PERLIS<center></span></h1><br><br>
		<div>
			<center>
			<div class="article">
				<h2>The Clubs are exclusively for students of the Universiti Teknologi Mara Perlis Cawangan Arau and we look forward to welcoming you.</h2><br><br>

		<div class="row">
			<div class="column">
				<h3> COMMUNITY SERVICE CLUB</h3>
				<center>
				<img src="11.webp" width="180">
				</center>
				</div>
				
				<div class="column">
					<h3> ENTREPRENUERSHIP CLUB</h3>
					<center>
					<img src="1.png" width="250">
					</center>
				</div>
				<br>
				<div class="column">
					<h3> DEBATE CLUB</h3>
					<center>
					<img src="dbt.png" width="150">
					</center>
				</div>
				
				<div class="column">
					<h3> THEATRE CLUB</h3>
					<center>
					<img src="theatre.png" width="150">
					</center>
				</div>
		</div>
			</div>
		</div>
	</div>	
	<center>
</body>
</html>
<?php 
}else{
     header("Location: indexMember.php");
     exit();
}
 ?>