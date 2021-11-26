<?php
    include "config.php";

    $no = isset($_GET['no']);
    $item_name = isset($_GET['item_name']);

    $query = "DELETE FROM inventory WHERE no  = '$no'";
    $execute = mysqli_query($connect,$query);
    // session_start();

    if($execute){
        echo "Data Successfully Deleted";
    } else{
        echo "Data Failed";
    }
?>