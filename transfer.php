<?php
include 'index.php';
include 'link.php';
$igs = $_GET['id'];
$sql = "SELECT * FROM `customers` WHERE `customers`.`customer_id` = $igs";
$showdata = mysqli_query($conn, $sql);
$arr = mysqli_fetch_array($showdata);
$sql2 = "SELECT * from customers where customer_id!=$igs";
$result = mysqli_query($conn, $sql2);
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
        <h1>Payment</h1>
        <div class="center">
            <div class="data">

                <div class="text">
                    <form action="" method="POST">
                        <p>Sender&nbsp;:&nbsp;&nbsp;
                            <input type="text" name="sand" id="sand" value="<?php echo $arr['customer_name']; ?>" readonly />
                        </p>
                        <p>Reciver&nbsp;:&nbsp;&nbsp;<select required="required" type="text" name="water" value="none" id="reciver">Select
                                <!-- <option value="none" selected disabled hidden  >Select</option> -->
                                <option value="" selected disabled hidden>--Select--</option>
                                <?php

                                while ($rows = mysqli_fetch_assoc($result)) {

                                ?><option value="<?php echo $rows['customer_id']; ?>">

                                        <?php echo $rows['customer_name']; ?>

                                    </option>

                                <?php
                                }
                                ?>
                            </select></p>
                        <p>Amount&nbsp;:&nbsp;&nbsp;
                            <input type="numbers" class="text" name="air" id="amount" value="" required>
                        </p>
                        <div class="cont">
                            <a  autocomplete="off" href="#" method="POST"><button class="big" type="submit" name="submit">Transfer</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $from = $_POST['sand'];
    $to = $_POST['water'];
    $amount = $_POST['air'];

    $sql = "SELECT * from customers where customer_id=$to";
    $q1 = mysqli_query($conn, $sql);
    $sql14 = mysqli_fetch_array($q1);



    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be trasferrred")';
        echo '</script>';
    } else if ($amount > $arr['acc_balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("You do not have sufficient balance to transfer")';
        echo '</script>';
    } else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert(' enter correct amount')";
        echo "</script>";
    } else {
        $recentbalance = $arr['acc_balance'] - $amount;
        $sql4 = "UPDATE customers set acc_balance=$recentbalance where customer_id=$igs";
        mysqli_query($conn, $sql4);



        $recentbalance = $sql14['acc_balance'] + $amount;
        $sql5 = "UPDATE customers set acc_balance=$recentbalance where customer_id=$to";
        mysqli_query($conn, $sql5);

        $sender = $arr['customer_name'];
        $receiver = $sql14['customer_name'];
        $intqery = "insert into transaction(sender, reciver, amount) values('$sender', '$receiver', '$amount')";
        $res = mysqli_query($conn, $intqery);

        if ($res) {
            echo "<script> alert('Transaction Successful');
                                         window.location.href='history.php';
                               </script>";
        }

        $recentbalance = 0;
        $amount = 0;
    }
}
?>