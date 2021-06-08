
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <?php include 'link.php'?>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main-div">
            <h1>List of Customers</h1>
            <div class="center-div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Balance</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
    
                            include 'index.php';
                            // $sql = "CREATE DATABASE bankdb";
                            // mysqli_query($conn, $sql);
                            // include("connection.php");
                            // $query = "SELECT * FROM customer";
                            // $data = mysqli_connect($conn, $query);
                            // $total = mysqli_num_rows($data);
                            $sql = "SELECT * FROM `customers`";
                            $query = mysqli_query($conn,$sql);
                            $res = mysqli_fetch_array($query);

                            do{
                                ?>
                                <tr>
                                <td><?php echo $res['customer_id'];?></td>
                                <td><?php echo $res['customer_name'];?></td>
                                <td><?php echo $res['customer_phone'];?></td>
                                <td><?php echo $res['customer_email'];?></td>
                                <td><?php echo $res['acc_balance'];?></td>
                                <td><a href="update.php?id=<?php echo $res['customer_id']; ?>"><button class="button"><span>view</span></button></a></td>
                            </tr>
                            <?php
                            }
                            while($res=mysqli_fetch_array($query))   
                        ?>
                        
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </body>
    </html>