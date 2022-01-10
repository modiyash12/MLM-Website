
<?php


require('config.php');
session_start();
$val=  $_SESSION["memberid"];
        $sql="SELECT * FROM `user_g` WHERE `memberid`='$val'";
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

       
            $sql = "UPDATE `user_g` SET `aadhaar`='$aadhaar',`panno` ='$panno',`accountno`=$accountno WHERE `memberid`='$val'";


if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Sucessfully update');document.location='user_dashboard2.php'</script>";
        } else {
            echo "<script>alert('Record updating failed');document.location='updatekyc2.php'</script>";
            }

        $conn->close();
}
 ?>

 
<?php
include("header.php");
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
                <form action="updatekyc2.php" method="POST">

                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>AADHAAR NO</label>
                        <input type="text" class="form-control" value="<?php echo $row['aadhaar']; ?>" name="aadhaar" pattern="[0-9]+" minlength="16" maxlength="16" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PAN NO </label>
                        <input type="text" class="form-control"  value="<?php echo $row['panno']; ?>"  name="panno" pattern="[0-9]+" minlength="4" maxlength="16">
                      </div>
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-3">
           
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ACCOUNT NO</label>
                        <input type="text" class="form-control"  value="<?php echo $row['accountno']; ?>" pattern="[0-9]+" name="accountno" >
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
include("footer.php");
    ?>
