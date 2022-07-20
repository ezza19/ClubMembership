<?php
// Include config file
require_once "config.php";
// select all club members
$sql = "SELECT * FROM club_member";
$result_club_member = mysqli_query($conn, $sql)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin View</title>
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
                <h2 class="text-center">Member Application Approval</h2>
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <a href="create.php" class="btn btn-success pull-right">Add New User</a>
                    </div>
                    <div class="table-responsive">
                        <table class='table table-bordered table-striped mt-2'>
                            <thead>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Name</th>
                                    <th>Password</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
									<th>Club</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (mysqli_num_rows($result_club_member) > 0) : ?>
                                    <?php while ($clubmember = mysqli_fetch_array($result_club_member)) : ?>
                                        <tr>
                                            <td><?= $clubmember['member_id'] ?></td>
                                            <td><?= $clubmember['member_name'] ?></td>
                                            <td><?= $clubmember['member_password'] ?></td>
                                            <td><?= $clubmember['member_phonenum'] ?></td>
                                            <td><?= $clubmember['member_email'] ?></td>
											<td><?= $clubmember['club_type'] ?></td>
                                            <td>
                                                <?php if ($clubmember['member_status'] == 0) : ?>
                                                    <span class="badge badge-warning">Pending</span>
                                                <?php elseif ($clubmember['member_status'] == 1) : ?>
                                                    <span class="badge badge-success">Approved</span>
                                                <?php elseif (($clubmember['member_status'] == 2)) : ?>
                                                    <span class="badge badge-danger">Reject</span>
                                                <?php else : ?>
                                                    <span class="badge badge-danger">Error</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-warning" href="update.php?member_id=<?= $clubmember['member_id'] ?>"> Update </a>
                                                <a class="btn btn-success" href="approval.php?member_id=<?= $clubmember['member_id'] ?>"> Approve </a>
                                                <a class="btn btn-danger" href="reject.php?member_id=<?= $clubmember['member_id'] ?>"> Reject </a>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="7"> No records found. </td>
                                    </tr>
                                <?php endif; ?>
                                <?php mysqli_free_result($result_club_member); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</body>

</html>