<?php
include('config.php');
include('generateid2.php');
include('function.php');

if (isset($_GET["referid"])) {
      $referid=$_GET['referid'];
    }


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

       $sql = "INSERT INTO `user_g` ( `name`, `email`, `mobileno`, `address`, `memberid`, `password`, `regdate`,`plan`, `state`,`refer`,`user_status`) VALUES ('$name','$email',$mobileno,'$address','$memberid','$password',now(),$plan, '$state' ,'$refer','PENDING' )";
 

if ($conn->query($sql) === TRUE) {
            echo "<script>alert('CONGRATULATION YOU ARE SUCCESSFULLY REGISTERED WITH SARTHAK SALES ');document.location='index.php'</script>";
        } else {
            echo "<script>alert('Record  Inserting failed');document.location='register.php'</script>";
            }

        $conn->close();
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SARTHAK SALES</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      
    </ul>

 <!-- SEARCH FORM --></nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="user_dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SARTHAK SALE </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
            <a href="register2.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>



          <li class="nav-item has-treeview">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                ABOUT US
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                BUISNESS PLAN
              </p>
            </a>
          </li>

         

          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                CONTACT US
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">REGISTRATION (GOLDEN PLAN)</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
     <section class="content">
      <div class="container-fluid">

   <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">REGISTER YOURSELF</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="register2.php" method="POST">

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
                        <input type="text" class="form-control"  value="<?php echo $referid; ?>" name="refer" readonly>
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
include('footer.php');
  ?>