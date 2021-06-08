<?php
include 'index.php';
echo "high";

$sql11 = "SELECT * from customers where customer_id=111";
        $q1 = mysqli_query($conn,$sql11);
        $sql12 = mysqli_fetch_array($q1);

        
?>