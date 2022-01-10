<?php

include('config.php');

session_start();
$val=  $_SESSION["memberid"];

 $sql="SELECT * FROM `user_g` WHERE `memberid`='$val'";
        $result = mysqli_query($conn, $sql);  
         $row=mysqli_fetch_assoc($result);

              $conn->close();
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total from user_g WHERE `refer`='$val'";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
 $num_rows=$values['total'];
?>


<?php
include("config.php");

$sql="SELECT count(id) AS total from user_g WHERE `aadhaar`= 0 AND `refer`='$val'";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
 $num_rows2 = $values['total'];

?>

<?php
 $num_rows3=$num_rows-$num_rows2;
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total from `epin_list_g` WHERE `status`='UNUSED' AND `memberid`='$val' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
 $num_rows4 = $values['total'];

?>

<?php
include("config.php");

$sql="SELECT count(id) AS total from user_g WHERE `refer`= '$val' AND `user_status`='PENDING'";
$result4=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result4);
 $num_rows5 = $values['total'];

?>
