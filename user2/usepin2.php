

<?php

include('config.php');
session_start();

$val=  $_SESSION["memberid"];

   if (isset($_POST['activate'])) {
    $uid = mysqli_real_escape_string($conn, $_POST['id']);

   
       $sql="SELECT count(epin) AS total FROM `epin_list_g` WHERE `memberid`='$val' AND `status`='UNUSED' ";
       $result=mysqli_query($conn,$sql);
       $values=mysqli_fetch_assoc($result);
       $pin = $values['total'];

      if($pin>0){

         $query="UPDATE `user_g` SET `user_status`='ACTIVATED' WHERE `id`=$uid ";

    if ($conn->query($query) === TRUE) {


      $query="SELECT * from `epin_list_g` WHERE `status`='UNUSED' AND `memberid`='$val' LIMIT 1";
      $res=mysqli_query($conn,$query);
 
      $row = mysqli_fetch_array($res);

        echo $id=$row["id"];

            $query="UPDATE `epin_list_g` SET `status`='USED' WHERE `id`=$id ";
            mysqli_query($conn,$query);

          
            echo "<script>alert('USER SUCCESSFULLY ACTIVATED');document.location='usepin2.php'</script>";
        } 
      }
            else{
             echo "<script>alert('NO PINS AVAILABLE BUY SOME PIN FIRST');document.location='user_dashboard2.php'</script>";
            }

          }


?>
<?php
include("header.php");
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    </div>
    </section>

    
 <div class="row">
   <div class="col-12 col-sm-6 col-md-12">

      <div class="card" style="margin-left: 10px;">
              <div class="card-header border-transparent">
                <h3 class="card-title">PIN REQUEST</h3>

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

                    $sql= "SELECT * FROM `user_g` WHERE `user_status`='PENDING' AND `refer`='$val' ";
                      $result = $conn->query($sql);

                    if($result -> num_rows > 0){
                             while($row = $result ->fetch_assoc()){                              

                                 ?>

                      <tr> 
                      <td> <?php echo $row["id"]; ?> </td>
                       <td> <?php echo $row["memberid"]; ?> </td> 
                     <td> <?php echo $row["name"]; ?> </td>
                    <td> <?php echo $row["mobileno"]; ?> </td>

                    <form action="usepin2.php" method="POST">
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

              <?php
include("footer.php");
              ?>
              <!-- /.card
