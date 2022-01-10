<!DOCTYPE html>
<html>
<body>
 
<?php

include("config.php");

$sql="SELECT max(memberid) AS last_id FROM `user`";
 $result = mysqli_query($conn, $sql); 
 $values=mysqli_fetch_assoc($result);
$ans=$values['last_id'];

if($ans=="")
{
	echo $newid='SS1001';
}else{

 $newid=$ans;
  $newid++;
  }
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
 $autopass = substr( str_shuffle( $chars ), 0, 8 );


?>
 
</body>
</html>