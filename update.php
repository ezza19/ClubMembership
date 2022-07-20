<?php
if (isset($_GET["member_id"]) && !empty(trim($_GET["member_id"]))) {
    require_once "config.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $member_id = trim($_GET["member_id"]);
        $member_name = trim($_POST["member_name"]);
        $member_password = trim($_POST["member_password"]);
        $member_phonenum = trim($_POST["member_phonenum"]);
        $member_email = trim($_POST["member_email"]);
		$club_type = trim($_POST["club_type"]);
        $member_status = trim($_POST["member_status"]);

        $query = "UPDATE club_member SET member_name = '$member_name', member_password = '$member_password', member_phonenum = '$member_phonenum', member_email = '$member_email', club_type = '$club_type', member_status = '$member_status' WHERE member_Id = '$member_id'";

        if (mysqli_query($conn, $query)) {
            $success = "Record updated successfully";
        } else {
            $error = "Error updating record: " . mysqli_error($conn);
        }
    }
    $member_id = trim($_GET["member_id"]);
    $query = mysqli_query($conn, "SELECT * FROM club_member WHERE member_Id = '$member_id'");
    if ($clubmember = mysqli_fetch_assoc($query)) {

        $member_name         = $clubmember["member_name"];
        $member_password    = $clubmember["member_password"];
        $member_phonenum    = $clubmember["member_phonenum"];
        $member_email         = $clubmember["member_email"];
		$club_type         = $clubmember["club_type"];
        $member_status       = $clubmember["member_status"];
    } else {
        header("location: update.php");
        exit();
    }
    mysqli_close($conn);
} else {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php if (isset($success)) : ?>
                        <div class="alert alert-success">
                            <strong>Success!</strong> <?= $success; ?>
                        </div>
                    <?php elseif (isset($error)) : ?>
                        <div class="alert alert-danger">
                            <strong>Error!</strong> <?= $error; ?>
                        </div>
                    <?php endif ?>
                    <div class="card">
                        <div class="card-header">
                            <h2>View Record</h2>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Member Name</label>
                                            <input type="text" name="member_name" class="form-control" value="<?= $member_name; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Member Password</label>
                                            <input type="text" name="member_password" class="form-control" value="<?= $member_password; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Member Phone Number</label>
                                            <input type="number" name="member_phonenum" class="form-control" value="<?= $member_phonenum; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Member Email</label>
                                            <input type="text" name="member_email" class="form-control" value="<?= $member_email; ?>">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Club</label>
                                            <input type="text" name="club_type" class="form-control" value="<?= $club_type; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Member Status</label>
                                            <select class="form-control" name="member_status" id="member_status">
                                                <option value="0" <?php if ($member_status == 0) : ?> selected <?php endif ?>>Pending</option>
                                                <option value="1" <?php if ($member_status == 1) : ?> selected <?php endif ?>>Approved</option>
                                                <option value="2" <?php if ($member_status == 2) : ?> selected <?php endif ?>>Rejected</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class=" row">
                                        <div class="col-md-12">
                                            <a href="update.php" class="btn btn-secondary">Back</a>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>