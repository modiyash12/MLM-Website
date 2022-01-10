<?php
include('config.php');
include('generateid2.php');
include('function.php');




  if (isset($_POST['submit'])) {
      
      $name = mysqli_real_escape_string($conn,$_POST['name']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
       $mobileno = mysqli_real_escape_string($conn,$_POST['mobileno']); 
      $address = mysqli_real_escape_string($conn,$_POST['address']);
      $memberid = mysqli_real_escape_string($conn,$_POST['memberid']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);
            $plan = mysqli_real_escape_string($conn,$_POST['plan']); 
             $state = mysqli_real_escape_string($conn,$_POST['state']);
      $refer = mysqli_real_escape_string($conn,$_POST['refer']);

       $sql = "INSERT INTO `user_g` ( `name`, `email`, `mobileno`, `address`, `memberid`, `password`, `regdate`,`plan`, `state`,`refer`,`user_status`) VALUES ('$name','$email',$mobileno,'$address','$memberid','$password',now(),$plan, '$state' ,'$refer','ACTIVATED' )";
 

if ($conn->query($sql) === TRUE) {
            echo "<script>alert('CONGRATULATION YOU ARE SUCCESSFULLY REGISTERED WITH SARTHAK SALES ');document.location='admindashboard.php'</script>";
        } else {
            echo "<script>alert('Record  Inserting failed');document.location='adduser2.php'</script>";
            }

        $conn->close();
}
 ?>

<?php include('adminheader.php')?>
    
      <div class="container-fluid">

   <div class="col-md-12">

     <section class="content">            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">ADD USER</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="adduser2.php" method="POST">

                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>FULL NAME</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>EMAIL</label>
                        <input type="email" class="form-control" placeholder="Enter Email" value="null" name="email" required>
                      </div>
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PHONE NO</label>
                        
                         <input type="text" class="form-control" placeholder="Enter Number" name="mobileno" pattern="[0-9]+" minlength="10" maxlength="10" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ADDRESS</label>
                        <textarea class="form-control" rows="3" placeholder="Enter Address" name="address" required></textarea>
                      </div>
                    </div>

                  </div>


                   <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>MEMBERID</label>
                         <input type="text" class="form-control" name="memberid" value="<?php echo $newid; ?>" readonly>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="password" class="form-control" name="password" value="<?php echo $autopass; ?>" readonly>
                      </div>
                    </div>

                  </div>


                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PRODUCT</label>
                    <input type="text" class="form-control" name="plan" value="1500" readonly>
                      </div>
                    </div>

                    <div class="col-sm-6">
                     <div class="form-group">
                        <label>SELECT STATE</label>
                        <select multiple class="form-control" name="state" required>
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

                    <div class="col-sm-2">
                    </div>

                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>SPONSOR ID</label>
                        <input type="text" class="form-control"  value="admin" name="refer">
                      </div>
                    </div>

                    <div class="col-sm-2">
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
include('adminfooter.php');
  ?>