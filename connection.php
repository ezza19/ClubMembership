<?php
$host = "localhost"; // server
$user = "root"; // username
$pass = ""; // password
$database = "clubsystem"; // database name
try{
    $conn = mysqli_connect($host, $user, $pass, $database);
    //echo ("Successful in connection");
    }catch(MySQLi_Sql_Exception $ex){
        //echo("Error in connection");
    } //club_member database
    if(isset($_POST['submit'])){
        $member_name = $_POST['member_name'];
        $member_password = $_POST['member_password'];
        $member_phonenum = $_POST['member_phonenum'];
        $member_email = $_POST['member_email'];
        $club_type = $_POST['club_type'];
        $register_query = "INSERT INTO `club_member`(`member_name`, `member_password`, `member_phonenum`, `member_email`, `club_type` ) VALUES ('$member_name','$member_password','$member_phonenum','$member_email', '$club_type')";
        try{
            $register_result = mysqli_query($conn , $register_query);
            if($register_result){
                if(mysqli_affected_rows($conn)>0)
                {
                    //echo("Registration successful");
                }else{
                    //echo("Error in registration");
                }
            }
        }catch(Exception $ex)
        {
            echo("error".$ex->getMessage());
        }
    }
?>