<?php
    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM staff WHERE username = '$username' AND password = '$password'";
    $execute = mysqli_query($connect,$query,$query2);

    $row = mysqli_fetch_object($execute);
    $check = mysqli_num_rows($execute);

    if($check > 0){
        echo "Data Success";
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "Login";
        header("location:home.php");
    } else{
        header("location:index.php?message=failed");
    }

    // if($execute){
    //     echo "Success";
    // } else{
    //     echo "Error";
    // }
?>