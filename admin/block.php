<?php
include("config.php");
if (isset($_GET["id"])) {

	$id=$_GET['id'];

	$sql=" UPDATE `user` SET `user_status`='PENDING' WHERE `id`=$id";
      if (mysqli_query($conn,$sql)) {
            echo "<script>alert('USER BLOCKED');document.location='showuser.php'</script>";
      }else{
               echo "<script>alert('CANT BE BLOCKED');document.location='showuser.php'</script>";
   }
}
?>