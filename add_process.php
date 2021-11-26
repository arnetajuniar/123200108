<?php
	session_start();
	$username=$_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("location:login.php?message=need_login");
	}
		include "config.php";
		$no = isset($_POST['no']);
        $item_id = $_POST['item_id'];
        $item_name = $_POST['item_name'];
        $amount = $_POST['amount'];
        $unit = $_POST['unit'];
        $arrival_date = $_POST['arrival_date'];
        $category = $_POST['category'];
        $item_status = isset($_POST['item_status']);
        $price = $_POST['price'];

        $query=mysqli_query($connect, "insert into inventory values ('$no','$item_id','$item_name',
        '$amount', '$unit', '$category', '$item_status', '$price')") or die(mysqli_error($connect));
	
	if($query)
	{
    header("location:inventory_list.php?message=sucessfully_added");	}
	else
	{
	echo "Input data failed";
	}
?>