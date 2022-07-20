<?php
require_once "config.php";

$member_name = $member_password = $member_phonenum = $member_email = $club_type = "";
$member_name_error = $member_password_error = $member_phonenum_error = $member_email_error = $club_type_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $memberName = trim($_POST["member_name"]);
    if (empty($memberName)) {
        $member_name_error = "Your name is required.";
    } else {
        $memberName = $memberName;
    }

    $memberPassword = trim($_POST["member_password"]);
    if (empty($memberPassword)) {
        $member_password_error = "Password is required.";
    } else {
        $memberPassword = $memberPassword;
    }

    $phoneNumber = trim($_POST["member_phonenum"]);
    if (empty($phoneNumber)) {
        $member_phonenum_error = "Phone Number is required.";
    } else {
        $phoneNumber = $phoneNumber;
    }

    $member_email = trim($_POST["member_email"]);
    if (empty($member_email)) {
        $member_email_error = "Email is required.";
    } elseif (!filter_var($member_email, FILTER_VALIDATE_EMAIL)) {
        $member_email_error = "Please enter a valid email.";
    } else {
        $member_email = $member_email;
    }
	
	$clubType = trim($_POST["club_type"]);
    if (empty($clubType)) {
        $club_type_error = "Phone Number is required.";
    } else {
        $clubType = $clubType;
    }

    if (empty($member_name_error) && empty($member_password_error) && empty($member_phonenum_error) && empty($member_email_error) && empty($club_type_error)) {
        $sql = "INSERT INTO `club_member` (`member_name`, `member_password`, `member_phonenum`, `member_email`, `club_type`) VALUES ('$memberName', '$memberPassword', '$phoneNumber', '$member_email', '$clubType')";

        if (mysqli_query($conn, $sql)) {
            header("location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style type="text/css">
        .wrapper {
            width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Member</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                        <div class="form-group <?php echo (!empty($member_name_error)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="member_name" class="form-control" value="">
                            <span class="text-danger"><?php echo $member_name_error; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($member_password_error)) ? 'has-error' : ''; ?>">
                            <label>Password</label>
                            <input type="text" name="member_password" class="form-control" value="">
                            <span class="text-danger"><?php echo $member_password_error; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($member_phonenum_error)) ? 'has-error' : ''; ?>">
                            <label>Phone Number</label>
                            <input type="number" name="member_phonenum" class="form-control" value="">
                            <span class="text-danger"><?php echo $member_phonenum_error; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($member_email_error)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input type="email" name="member_email" class="form-control" value="">
                            <span class="text-danger"><?php echo $member_email_error; ?></span>
                        </div>
						
						<div class="form-group <?php echo (!empty($club_type_error)) ? 'has-error' : ''; ?>">
                            <label for = "club">Choose club:<br><br>
							<select name = "club_type" id = "club">
                            <option value = "Community Service Club">Community Service Club</option>
                            <option value = "Debate Club">Debate Club</option>
                            <option value = "Enterpreneurship Club">Enterpreneurship Club</option>
                            <option value = "Theater Club">Theater Club</option>
                        </div></select><br><br>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>