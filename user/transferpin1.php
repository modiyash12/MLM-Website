<?php
include('config.php');
session_start();

  $mid=$_SESSION["memberid"];
    $sql="SELECT count(epin) AS total FROM `epin_list` WHERE `memberid`='$mid' AND `status`='UNUSED' ";
    $result=mysqli_query($conn,$sql);
    $values=mysqli_fetch_assoc($result);
    $pin = $values['total'];

 if (isset($_POST['transfer'])) {
    $umemberid = mysqli_real_escape_string($conn, $_POST['memberid']);
     $noofpin = mysqli_real_escape_string($conn, $_POST['noofpin']);

    if ($pin>=$noofpin) {
  
      for($i=0;$i<$noofpin;$i++){
       $query="SELECT * from `epin_list` WHERE `status`='UNUSED' AND `memberid`='$mid' LIMIT 1";
      $result=mysqli_query($conn,$query );
      $row = mysqli_fetch_array($result);

        $id=$row["id"];

       $query_a="UPDATE `epin_list` SET `memberid`='$umemberid' WHERE `id`=$id ";
       mysqli_query($conn,$query_a);
       }

      echo "<script>alert('PIN SUCCESSFULLY TRANSFER ');document.location='user_dashboard.php'</script>";

}else{
   echo "<script>alert('YOU NOT HAVE ENOUGH PIN PLZZ BUY FIRST ');document.location='user_dashboard.php'</script>";
}

}