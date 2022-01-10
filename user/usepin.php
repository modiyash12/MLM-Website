<?php

include('config.php');
session_start();

   $val =$_SESSION['memberid'];

   if (isset($_POST['activate'])) {
    $uid = mysqli_real_escape_string($conn, $_POST['id']);

   
       $sql="SELECT count(epin) AS total FROM `epin_list` WHERE `memberid`='$val' AND `status`='UNUSED' ";
       $result=mysqli_query($conn,$sql);
       $values=mysqli_fetch_assoc($result);
       $pin = $values['total'];

      if($pin>0){

         $query="UPDATE `user` SET `user_status`='ACTIVATED' WHERE `id`=$uid ";

    if ($conn->query($query) === TRUE) {


      $query="SELECT * from `epin_list` WHERE `status`='UNUSED' AND `memberid`='$val' LIMIT 1";
      $result=mysqli_query($conn,$query);
 
      $row = mysqli_fetch_array($result);

       echo $id=$row["id"];

            $query="UPDATE `epin_list` SET `status`='USED' WHERE `id`=$id ";
            mysqli_query($conn,$query);

             echo "<script>alert('USER SUCCESSFULLY ACTIVATED');document.location='usepin.php'</script>";
        } 
      }
            else{
                echo "<script>alert('NO PINS AVAILABLE BUY SOME PIN FIRST');document.location='user_dashboard.php'</script>";
            }

          }


?>

<?php
include('header1.php');
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    
    
 <div class="row">
   <div class="col-12 col-sm-6 col-md-12">

      <div class="card" style="margin-left: 10px;">
              <div class="card-header border-transparent">
                <h3 class="card-title">ACTIVATE USER</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
               <th>ID</th>
              <th>MEMBER ID</th>
              <th>NAME</th>
              <th>PHONE NO</th>
              <th>ACTIVATE USER</th>

                    </tr>
                    </thead>
                    <tbody>

                   <?php

                    $sql= "SELECT * FROM `user` WHERE `user_status`='PENDING' AND `refer`='$val' ";
                      $result = $conn->query($sql);

                    if($result -> num_rows > 0){
                             while($row = $result ->fetch_assoc()){                              

                                 ?>

                      <tr> 
                      <td> <?php echo $row["id"]; ?> </td>
                       <td> <?php echo $row["memberid"]; ?> </td> 
                     <td> <?php echo $row["name"]; ?> </td>
                    <td> <?php echo $row["mobileno"]; ?> </td>

                    <form action="usepin.php" method="POST" onsubmit="return confirm('ARE YOU SURE')">
                      <input type="hidden" name="id" value=" <?php echo $row["id"]; ?>">
                      <td> <button type="submit" name="activate" class="btn-btn-success">ACTIVATE</button>
                       </td>
                      
                    </form>

                     </tr>             

                   <?php }}?>

                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
         

</div>
    </section>

    <?php
include('footer1.php');
    ?>

  