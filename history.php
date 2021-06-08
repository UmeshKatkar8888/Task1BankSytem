<?php
    include 'index.php';
    include 'link.php';
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="history.css">
        <link rel="stylesheet" href="style.css">
        <title></title>
        
        
       
    </head>
    <body>
    
    
   <header>
         <nav class="navbar">
            <ul>
                <li><a href="homepage.html">Home</a></li>
                <li><a href="http://localhost/FGH/customers.php">Customer</a></li>
                <li><a href="http://localhost/FGH/whole.php">Transfer Money</a></li>
                <li><a href="http://localhost/FGH/History.php">History</a></li>
                <div class="name">
                    State Bank
                </div>
            </ul>
        </nav>
    </header>
        <div class="maindiv">
        
            <h1>Transactions</h1>
            <div class="sand">
                <div class="tableresponsive">
                    <table class="scrolldown"> 
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Sender</th>
                                <th>Reciver</th>
                                <th>amount</th>
                                
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
                            $sql = "SELECT * FROM `transaction`";
                            $query = mysqli_query($conn,$sql);
                            $res = mysqli_fetch_array($query);

                            do{
                                ?>
                                <tr>
                                <td><?php echo $res['id'];?></td>
                                <td><?php echo $res['sender'];?></td>
                                <td><?php echo $res['reciver'];?></td>
                                <td><?php echo $res['amount'];?></td>
                                
                                
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