<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
include "config.php";

    $query = "SELECT * FROM inventory";
    $execute = mysqli_query($connect,$query);

    if(empty($_SESSION['status'])){
        header("location:index.php?message=need_login");
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="header">
        <div class="header-logo">
            LIST OF INVENTORY<br>
            EVERYTHING OFFICE
        </div>
        <div class="header-list">
            <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="inventory_list.php">Inventory List</a></li>
            <li><a href="#">List per Category</a>
                <!-- <li><a href="#">Sub Building</a></li>
                <li><a href="#">Sub Vehicle</a></li>
                <li><a href="#">Sub Office Stationery</a></li>
                <li><a href="#">Sub Electronic</a></li> -->
            </li>
            </div>
            <li style="float: right; padding: 50px 40px;"><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="welcome">
            <h2>Welcome</h2>
            <?php
                echo "<h2>" . $_SESSION['username'] . "</h2>";
            ?>
        </div>
    </div>

    <div class="footer">Inventory Web 2021</div>
    
</body>
</html>