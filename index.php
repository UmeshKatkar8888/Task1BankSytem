<?php
    $servername = "localhost";
    $username ="root";
    $password="";
    $database = "bankdb";
    $database2 = "transaction";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(! $conn ) {
        die('Could not connect: ' . mysql_error());
     }
?>
