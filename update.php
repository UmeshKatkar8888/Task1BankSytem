<?php
    include 'index.php';
    
    $ids = $_GET['id'];
    
    $sql = "SELECT * FROM `customers` WHERE `customers`.`customer_id` = $ids";
    $showdata = mysqli_query($conn, $sql);
    $array = mysqli_fetch_array($showdata);
    // echo $array['customer_name'];
   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
    
</head>
<body>
        <div class="main">
            <h1>Details</h1>
            <div class="center">
                <div class="data">
                    <img src="blank.png" alt=""><br>
                    <div class="text">
                    <ul>
                        <li><b>Name</b>&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $array['customer_name']."<br>";?></li>
                        <li><b>Phone</b>&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $array['customer_phone']."<br>";?></li>
                        <li><b>Email</b>&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $array['customer_email']."<br>";?></li>
                        <li><b>Account Balance</b>&nbsp;:&nbsp;&nbsp;<?php echo $array['acc_balance']."<br>";?></li>
                        <li><a href="transfer.php?id=<?php echo $array['customer_id']; ?>"><button class="btn">Transfer</button></a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>