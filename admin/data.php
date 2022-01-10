<?php
include("config.php");

$sql="SELECT count(id) AS total from user";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
 $num_rows=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total from user_g";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
 $num_rows1=$values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total from user WHERE `user_status` = 'PENDING' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
  $num_rows2 = $values['total'];
?>

<?php
include("config.php");

$sql="SELECT count(id) AS total from user_g WHERE `user_status` = 'PENDING' ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
  $num_rows3 = $values['total'];
?>





