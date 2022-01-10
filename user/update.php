
<?php
include('config.php');
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



      $name = mysqli_real_escape_string($conn,$_POST['name']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
       $mobileno = mysqli_real_escape_string($conn,$_POST['mobileno']); 
      $address = mysqli_real_escape_string($conn,$_POST['address']);

            $memberid = mysqli_real_escape_string($conn,$_POST['memberid']);

      $password = mysqli_real_escape_string($conn,$_POST['password']);

      $plan = mysqli_real_escape_string($conn,$_POST['plan']);

      $state = mysqli_real_escape_string($conn,$_POST['state']);
      
       
            $sql = "UPDATE `user` SET `name`='$name',`email` ='$email',`mobileno`=$mobileno,`address` = '$address',`memberid`='$memberid',`password`='$password',`plan`=$plan,
            `state`= '$state' WHERE `memberid`='$val'";


if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Sucessfully update');document.location='user_dashboard.php'</script>";
        } else {
            echo "<script>alert('Unable to update record');document.location='update.php'</script>";
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
                <h3 class="card-title">EDIT DETAIL</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="update.php" method="POST">

                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>FULL NAME</label>
                        <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>EMAIL</label>
                        <input type="email" class="form-control"  value="<?php echo $row['email']; ?>"  name="email" required>
                      </div>
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PHONE NO</label>
                         <input type="text" class="form-control"  value="<?php echo $row['mobileno']; ?>" name="mobileno" pattern="[0-9]+" minlength="10" maxlength="10" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ADDRESS</label>
                        <input class="form-control" rows="3"  value="<?php echo $row['address']; ?>" name="address" required></input>
                      </div>
                    </div>

                  </div>


                   <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>MEMBERID</label>
                         <input type="text" class="form-control" name="memberid"  value="<?php echo $row['memberid']; ?>" readonly>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="text" class="form-control" name="password"  value="<?php echo $row['password']; ?>" >
                      </div>
                    </div>

                  </div>


                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PRODUCT</label>
                         <input type="text" class="form-control" name="plan" value="150" readonly>
                      </div>
                    </div>

                    <div class="col-sm-6">
                     <div class="form-group">
                        <label>SELECT STATE</label>
                        <select multiple class="form-control" name="state" value="<?php echo $row['state']; ?>" required>
                         <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
                        </select>
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