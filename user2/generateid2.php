<!DOCTYPE html>
<html>
<body>
 
<?php

include("config.php");

$sql="SELECT max(memberid) AS last_id FROM `user_g`";
 $result = mysqli_query($conn, $sql); 
 $values=mysqli_fetch_assoc($result);
$num_rows1=$values['last_id'];

$newid=$num_rows1;
$newid++;
 $newid;

$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
 $autopass = substr( str_shuffle( $chars ), 0, 8 );


?>
 
</body>
</html>