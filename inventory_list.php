<?php
    include "config.php";

    $query = "SELECT * FROM inventory";
    $execute = mysqli_query($connect,$query);

    session_start();
    if(empty($_SESSION['status'])){
        header("location:index.php?message=need_login");
    }

    // if($execute){
    //     echo "<br>Data Successfully Taken";
    // }
    // else{
    //     echo "Data Failed";
    // }
?>

<DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>Inventory List</title>
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
            <li style="float: right; padding-right: 40px;"><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <br>
    <a href="add.php"><input type="submit" value="+ Add" class="submit"></a>
    <br>
    <table>
        <thead>
            <th>No</th>
            <th>Code</th>
            <th>Name of goods</th>
            <th>Amount</th>
            <th>Unit</th>
            <th>Coming Date</th>
            <th>Category</th>
            <th>Status</th>
            <th>Unit price</th>
            <th>Total price</th>
            <th>Action</th>
        </thead>
            <?php
            while($row = mysqli_fetch_object($execute)){
            ?>
                <tr>
                    <td><?= $row->no?></td>
                    <td><?= $row->item_id?></td>
                    <td><?= $row->item_name?></td>
                    <td><?= $row->amount?></td>
                    <td><?= $row->unit?></td>
                    <td><?= $row->arrival_date?></td>
                    <td><?= $row->category?></td>
                    <td><?= $row->item_status?></td>
                    <td>Rp<?=$row->price?></td>
                    <td>
                        Rp<?php echo$totalprice = $row->price * $row->amount;?>
                    </td>
                    <td>
                        <a href="update.php?no=<?= $row->no?>">
                            <button>
                                Update
                            </button>
                        </a>
                        <a href="delete.php?item_name=<?= $row->item_name?>">
                            <button>
                                Delete
                            </button>
                        </a>
                    </td>
                 </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    
    <br><br>
    <div class="footer">Inventory Web 2021</div>

</body>
</html>