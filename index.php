<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="header">
        <div class="header-logo">
            LIST OF INVENTORY<br>
            EVERYTHING OFFICE
        </div>
    </div>
    <h2>Login</h2>
    
    <form method="POST" action="login_check.php">
        <label>Username</label><br>
        <input type="username" name="username"> <br>

        <label>Password</label><br>
        <input type="password" name="password"> <br>

        <?php
        if(isset($_GET['message'])){
            if($_GET['message'] == "failed"){
                echo "Login Failed";
            } else if($_GET['message'] == "logout"){
                echo "Logout Success";
            } else if($_GET['message'] == "need_login"){
                echo "You need login to use your access";
            } else if($_GET['message'] == "successfully_added"){
                echo "Data successfully added";
            }
        }
        ?>
        <br><br>
        <input type="submit" value="submit" class="submit">
    </form>

   
</body>
</html>