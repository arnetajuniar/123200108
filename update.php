<?php
    include "config.php";

    $no = isset($_GET['no']) ? $_GET['no']:'';

    $query = "SELECT * FROM inventory where no='$no'";
    $execute = mysqli_query($connect,$query);
    $row = mysqli_fetch_object($execute);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title>Edit Inventory Data<?= $item_id ?></title>
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
            <li>List per Category</li>
            <li style="float: right; padding: 50px 40px;"><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <h1>Change Inventory Data</h1>
    <form action="update_process.php" method="POST">
        
        <label for="">Item Code</label>
        <input type="text" name="item_id" value="<?= $row->item_id ?>"><br>

        <label for="">Name of goods</label>
        <input type="text" name="item_name" value="<?= $row->item_name ?>"><br>

        <label for="">Amount</label>
        <input type="number" name="amount" value="<?= $row->amount ?>"><br>

        <label for="">Unit</label>
        <input type="text" name="unit" value="<?= $row->unit ?>"><br>

        <label for="">Coming Date</label>
        <input type="date" name="arrival_date" value="<?= $row->arrival_date ?>"><br>

        <label for="">Category</label>
        <select name="category">
            <option value="Office Stationery">Office Stationery</option>
            <option value="Building">Building</option>
            <option value="Electronic">Electronic</option>
            <option value="Vehicle">Vehicle</option>
        </select>

        <br>
        <label for="" style="float: left;">Status</label>
        <div class="status">
        <input type="radio" name="Well" value="<?= $row->item_status ?>">
        <label for="">Well</label>
        <input type="radio" name="Maintenance" value="<?= $row->item_status ?>">
        <label for="">Maintenance</label>
        <input type="radio" name="Damaged" value="<?= $row->item_status ?>">
        <label for="">Damaged</label>
        </div>

        <label for="">Unit price</label>
        <input type="number" name="price" value="<?= $row->price ?>"><br>

        <button type="submit">Submit</button>
    </form>
    <br><br>
    <div class="footer">Inventory Web 2021</div>
</body>
</html>