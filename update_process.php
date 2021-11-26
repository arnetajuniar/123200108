<?php
    include "config.php";
    
    $no = isset($_POST['no']);
    $item_id = $_POST['item_id'];
    $item_name = $_POST['item_name'];
    $amount = $_POST['amount'];
    $unit = $_POST['unit'];
    $arrival_date = $_POST['arrival_date'];
    $category = isset($_POST['category']);
    $item_status = isset($_POST['item_status']);
    $price = $_POST['price'];

    $query = "UPDATE inventory SET item_id = '$item_id', item_name='$item_name', amount='$amount', unit='$unit', arrival_date='$arrival_date', category='$category', item_status='$item_status', price='$price' WHERE no='$no'";
    
    // echo $query;
    $execute = mysqli_query($connect,$query);

    if($execute){
        echo "</h3>"."Data Successfully Edited"."</h3>";
    }
    else{
        echo "Data Failed";
    }
?>