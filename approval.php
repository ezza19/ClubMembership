<?php
require_once "config.php";
if (isset($_GET["member_id"]) && !empty(trim($_GET["member_id"]))) {


    $member_id = trim($_GET["member_id"]);
    $sql = "SELECT * FROM club_member WHERE member_id = '$member_id' AND member_status = '0'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $success = "Account has been accepted.";
        $sql = "UPDATE club_member SET member_status = '1' WHERE member_id = '$member_id' AND member_status = '0'";
        $query = mysqli_query($conn, $sql);
    } else {
        $error =  "Unknown error occured. Please try again.";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Approval</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Approval</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($success) && !empty($success)) { ?>
                            <div class="alert alert-success">
                                <?php echo $success; ?>
                            </div>
                        <?php } else if (isset($error) && !empty($error)) { ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
                        <a href="index.php" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>