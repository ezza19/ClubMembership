<!doctype html>
<?php
 include('connection.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initiak-scale =1.0">
        
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="style2.css">
    

        <title>Club Member Registration</title>
		
    </head>

    <body>
        <div class = "container">
            <div class = "forms">
                <div class = "form login">
                    <span class = "title">Club Member Registration</span><br>
                    <br>
                    <form action = " " method = "post">
                        <div class = "input-field">
                            <input type = "text" name= "member_name" placeholder="Enter your name" required>
                            <i class="uil uil-user icon"></i>
                        </div><br>
                        <div class = "input-field">
                            <input type = "password" class = "member_password" name= "member_password" placeholder="Enter your password" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div><br>
                        <div class = "input-field">
                            <input type = "text" name= "member_phonenum" placeholder="Enter your phone number" required>
                            <i class="uil uil-phone icon"></i>
                        </div><br>
                        <div class = "input-field">
                            <input type = "text" name= "member_email" placeholder="Enter your email" required>
                            <i class="uil uil-envelope icon"></i>
                        </div><br>
                        <div class = "select-form" style="width:200px;">
                        <label for = "club">Choose club:<br><br>
                        <select name = "club_type" id = "club" style="padding:10px 150px;">
                            <option value = "Community Service Club">Community Service Club</option>
                            <option value = "Debate Club">Debate Club</option>
                            <option value = "Enterpreneurship Club">Enterpreneurship Club</option>
                            <option value = "Theater Club">Theater Club</option>
                        </div></select>
                        <div class = "input-field button">
                            <input type="submit" name="submit" value="Register" a href="login.php"><br><br><br>
                    </form>
					<a href="loginMember.php" class="button">Proceed to Login</a>
                </div>
            </div>
        </div>
        <script src = "script.js"></script>
    </body>
</html>