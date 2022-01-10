



<?php
require('config.php');
session_start();
$val=  $_SESSION["memberid"];
        $sql="SELECT * FROM `user` WHERE `memberid`='$val'";
$result = mysqli_query($conn, $sql) ;
$row = mysqli_fetch_assoc($result);

?>


<?php
include('config.php');
include('function.php');

    $val=  $_SESSION["memberid"];


  if (isset($_POST['submit'])) {



      $aadhaar = mysqli_real_escape_string($conn,$_POST['aadhaar']);
      $panno = mysqli_real_escape_string($conn,$_POST['panno']);
       $accountno = mysqli_real_escape_string($conn,$_POST['accountno']); 

       
            $sql = "UPDATE `user` SET `aadhaar`='$aadhaar',`panno` ='$panno',`accountno`=$accountno WHERE `memberid`='$val'";


if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Sucessfully update');document.location='user_dashboard.php'</script>";
        } else {
            echo "<script>alert('Record updating failed');document.location='updatekyc.php'</script>";
            }

        $conn->close();
}
 ?>
<?php
include('header1.php');
?>
    
     <section class="content">
      <div class="container-fluid">

        

   <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">UPDATE KYC</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="#" method="POST">

                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>AADHAAR NO</label>
                        <input type="text" class="form-control"  name="aadhaar" pattern="[0-9]+" minlength="16" maxlength="16" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PAN NO </label>
                        <input type="text" class="form-control"    name="panno" pattern="[0-9]+" minlength="4" maxlength="16">
                      </div>
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-3">
           
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ACCOUNT NO</label>
                        <input type="text" class="form-control"  pattern="[0-9]+" name="accountno" >
                      </div>
                    </div>

                  </div>


                  

                             

                  <div class="row">


                    <div class="col-sm-5">
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                         <input type="submit" class="form-button" name="submit" value="submit">
                      </div>
                    </div>


                    <div class="col-sm-1">
                    </div>

                  </div>

                </form>
              </div>
              <!-- /.card-body -->
            </div>


      </div>
    </section>

<?php

include('footer1.php');
?>