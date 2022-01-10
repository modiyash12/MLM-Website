

<?php
include('header1.php');
?>

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">


         <?php
    include('config.php');

    $mid=$_SESSION["memberid"];
    $sql="SELECT count(epin) AS total FROM `epin_list` WHERE `memberid`='$mid' AND `status`='UNUSED' ";
    $result=mysqli_query($conn,$sql);
    $values=mysqli_fetch_assoc($result);
    $pin = $values['total'];

    if($pin>0){

      ?>
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">PIN TRANSFER</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="transferpin1.php" method="POST" onsubmit="return confirm('ARE YOU SURE')">

                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ENTER MEMBERID OF USER</label>
                        <input type="text" class="form-control" placeholder="ENTER MEMBERID OF USER" name="memberid" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NO OF PIN</label>
                        <input type="number" class="form-control" placeholder="Enter No Of Pin to be Transfer"  name="noofpin" required>
                      </div>
                    </div>

                      <div class="col-sm-6">
                      <div class="form-group">
                         <input type="submit" class="form-button" name="transfer" value="TRANSFER">
                      </div>
                    </div>


                    <div class="col-sm-1">
                    </div>

                  </div>

                </form>
              </div>
              <!-- /.card-body -->
            </div>

             <?php
          }
            else{
              echo "NO PINS ARE AVAILABLE PLEASE BUY SOME PIN FIRST";
            }
            ?>


    </div>
  </section>

<?php
include('footer1.php');
?>