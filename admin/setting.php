

<?php
include('config.php');
        $sql="SELECT * FROM `admin`";
$result = mysqli_query($conn, $sql) ;
$row = mysqli_fetch_assoc($result);

?>

<?php
  if (isset($_POST['submit'])) {

    
        
      
      $name = mysqli_real_escape_string($conn,$_POST['name']);
      $subname = mysqli_real_escape_string($conn,$_POST['subname']);
       $aboutus = mysqli_real_escape_string($conn,$_POST['aboutus']); 
		$location = mysqli_real_escape_string($conn,$_POST['location']);
         $email = mysqli_real_escape_string($conn,$_POST['email']);
		 $phoneno = mysqli_real_escape_string($conn,$_POST['phoneno']);

            $username=mysqli_real_escape_string($conn,$_POST['username']);

      $password = mysqli_real_escape_string($conn,$_POST['password']);
      $accountname = mysqli_real_escape_string($conn,$_POST['accountname']);
         $accountno = mysqli_real_escape_string($conn,$_POST['accountno']);
     $ifsc = mysqli_real_escape_string($conn,$_POST['ifsc']);

            $paytm=mysqli_real_escape_string($conn,$_POST['paytm']);

      $phonepay = mysqli_real_escape_string($conn,$_POST['phonepay']);

      

       
       
            $sql = "UPDATE `admin` SET `name`='$name',`subname` ='$subname',`aboutus`='$aboutus',`location` = '$location',`email`='$email',`phoneno`=$phoneno,`username`='$username',`password`= '$password',`accountname`='$accountname',`accountno`='$accountno',`ifsc`='$ifsc',`paytm`='$paytm',`phonepay`='$phonepay' ";


if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record Sucessfully update');document.</script>";
        } else {
            
            }

        $conn->close();
}
 ?>

 <?php

  if (isset($_POST['upload'])) {

     $_FILES['uploadpdf']['name'] ."<br>";
      $_FILES['uploadpdf']['type']."<br>";
     $_FILES['uploadpdf']['tmp_name']."<br>";
      $_FILES['uploadpdf']['error']."<br>";
     $_FILES['uploadpdf']['size']."<br>";

    move_uploaded_file($_FILES['uploadpdf']['tmp_name'], "uploads/".'MLM'.'.pdf');

     $_FILES['uploadlogo']['name'] ."<br>";
      $_FILES['uploadlogo']['type']."<br>";
     $_FILES['uploadlogo']['tmp_name']."<br>";
      $_FILES['uploadlogo']['error']."<br>";
     $_FILES['uploadlogo']['size']."<br>";

    move_uploaded_file($_FILES['uploadlogo']['tmp_name'], "uploads/".'logo'.'.png');
     
     $_FILES['uploadqr']['name'] ."<br>";
      $_FILES['uploadqr']['type']."<br>";
     $_FILES['uploadqr']['tmp_name']."<br>";
      $_FILES['uploadqr']['error']."<br>";
     $_FILES['uploadqr']['size']."<br>";

    move_uploaded_file($_FILES['uploadqr']['tmp_name'], "uploads/".'qr'.'.png');
          
}
 ?>

<?php 
include('adminheader.php');
 ?>

     <section class="content">
      <div class="container-fluid">

        

   <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">SETTING</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="setting.php" method="POST">

                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label> NAME</label>
                        <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>SUBNAME</label>
                        <input type="text" class="form-control"  value="<?php echo $row['subname']; ?>"  name="subname" required>
                      </div>
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>LOCATION</label>
                         <input type="text" class="form-control"  value="<?php echo $row['location']; ?>" name="location" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ABOUT US</label>
                        <input class="form-control" rows="3"  value="<?php echo $row['aboutus']; ?>" name="aboutus" required></input>
                      </div>
                    </div>

                  </div>


                   <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>EMAIL</label>
                         <input type="email" class="form-control" name="email"  value="<?php echo $row['email']; ?>" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PHONE NO</label>
                        <input type="text" class="form-control" name="phoneno"  value="<?php echo $row['phoneno']; ?>" >
                      </div>
                    </div>

                  </div>

                      <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>USER ID</label>
                         <input type="email" class="form-control" name="username"  value="<?php echo $row['username']; ?>">
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

                      <div class="col-sm-4">
                      <div class="form-group">
                        <label>ACCOUNT HOLDER NAME</label>
                         <input type="text" class="form-control" name="accountname"  value="<?php echo $row['accountname']; ?>">
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>BANK ACCOUNT NO</label>
                         <input type="text" class="form-control" name="accountno"  value="<?php echo $row['accountno']; ?>">
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>IFSC CODE</label>
                        <input type="text" class="form-control" name="ifsc"  value="<?php echo $row['ifsc']; ?>" >
                      </div>
                    </div>

                  </div>

                   <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PHONE PAY UPI</label>
                         <input type="text" class="form-control" name="phonepay"  value="<?php echo $row['phonepay']; ?>">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>PAYTM UPI</label>
                        <input type="text" class="form-control" name="paytm"  value="<?php echo $row['paytm']; ?>" >
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

                      <form action="setting.php" method="POST" enctype="multipart/form-data">

                   <div class="row">

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>UPLOAD PDF</label>
                         <input type="file" class="form-control" name="uploadpdf" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>UPLOAD LOGO</label>
                        <input type="file" class="form-control" name="uploadlogo" >
                      </div>
                    </div>


                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>UPLOAD QR CODE</label>
                        <input type="file" class="form-control" name="uploadqr" >
                      </div>
                    </div>


                  </div>

                  <div class="row">

                   <div class="col-sm-5">
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                         <input type="submit" class="form-button" name="upload" value="upload">
                      </div>
                    </div>


                    <div class="col-sm-1">
                    </div>

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