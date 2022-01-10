<?php
include('config.php');

session_start();

//$val=$_SESSION['memberid'];
$val='SS1001';
if ($val==" ") {
	echo $val;
}
?>