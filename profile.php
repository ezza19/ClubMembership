<?php 

  session_start();

  require 'db_conn.php';
  require 'functions.php';
  require 'navbar.php';

  if(isset($_SESSION['member_id'], $_SESSION['member_password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>My Profile</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

  <?php include 'navbar.php'; ?>

  <section>

    <div class="container">
      <strong class="title">My Profile</strong>
    </div>
    
    
    <div class="profile-box box-left">

      <?php

        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }


        $query = "SELECT * FROM club_member WHERE member_id = '".$_SESSION['member_id']."' AND member_password = '".$_SESSION['member_password']."'";

        ;

        if($result = mysqli_query($con, $query)) {

          $row = mysqli_fetch_assoc($result);

          echo "<div class='info'><strong>Member ID:</strong> <span>".$row['member_id']."</span></div>";
          echo "<div class='info'><strong>Member Name:</strong> <span>".$row['member_name']."</span></div>";
          echo "<div class='info'><strong>Member Password:</strong> <span>".$row['member_password']."</span></div>";
          echo "<div class='info'><strong>Member Phone Number:</strong> <span>".$row['member_phonenum']."</span></div>";
		  echo "<div class='info'><strong>Member Email:</strong> <span>".$row['member_email']."</span></div>";
		  echo "<div class='info'><strong>Member Status:</strong> <span>".$row['member_status']."</span></div>";

    
          $result = mysqli_query($con, $query_date);

          $row = mysqli_fetch_row($result);

        } else {

          die("Error with the query in the database");

        }

      ?>
      
      <div class="options">
        <a class="btn btn-primary" href="editprofile.php">Edit Profile</a>
        <a class="btn btn-success" href="changepassword.php">Change Password</a>
      </div>

      
    </div>

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php

  } else {
    header("location:index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>