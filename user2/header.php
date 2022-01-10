<?php

include('data2.php');
include('config.php');
        $sql="SELECT * FROM `admin`";
$res = mysqli_query($conn, $sql) ;
$b = mysqli_fetch_assoc($res);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo $b['name'];?> <?php echo $b['subname'];?></title>

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
        <a href="user_dashboard2.php" class="nav-link">Home</a>
      </li>
       <li class="nav-item d-none d-sm-inline-block">
        <a href="user_dashboard2.php" class="nav-link">LAST_LOGIN:<?php echo $row['lastlogin'];?></a>
      </li>
      


      <li>
        <div id="google_translate_element" style="margin-left: 700px;"></div>

        <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      </li>
    </ul>

 <!-- SEARCH FORM -->
    


  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="user_dashboard2.php" class="brand-link">
      <img src="/amitbhai2/admin/uploads/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $b['name'];?> <?php echo $b['subname'];?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://d2lu257anxgb6j.cloudfront.net/0b2583f5-27ff-4c46-abb4-046ba8cab24f/images/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
                    <a href="#" class="d-block"><?php echo $row['memberid'];?></a>
                   <a href="#" class="d-block"><?php echo $row['regdate'];?></a>


        </div>
      </div>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
            <a href="user_dashboard2.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
    
          <li class="nav-item">
            <a href="usertree2.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                TREE VIEW
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="update2.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                EDIT DETAIL
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="updatekyc2.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                UPDATE KYC
              </p>
            </a>
          </li>




           <li class="nav-item has-treeview">
            <a href="user_dashboard2.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                E-PIN 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="epinrequest2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i><i class="fa fa-file-excel-o" aria-hidden="true"></i>
                  <p>E-PIN REQUEST</p>
                </a>
              </li>
              <li class="nav-item">
                                <a href="usepin2.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i><i class="fa fa-file-text" aria-hidden="true"></i>
                  <p>USE EPIN</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="activate_user2.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                ADD USER
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview">
            <a href="transferpin2.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                TRANSFER PIN
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="user_dashboard2.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                WALLET
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user_dashboard2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i><i class="fa fa-file-excel-o" aria-hidden="true"></i>
                  <p>WITHDRAW MONEY</p>
                </a>
              </li>
              <li class="nav-item">
                                <a href="user_dashboard2.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i><i class="fa fa-file-text" aria-hidden="true"></i>
                  <p>WITHDRAW HISTORY</p>
                </a>
              </li>
            </ul>
          </li>

            <li class="nav-item">
            <a href="bank1.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                BANKING DETAIL
              </p>
            </a>
          </li>
    

          <li class="nav-item">
            <a href="logout2.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                LOGOUT
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
            <h1 class="m-0 text-dark">USER DASHBOARD (GOLDEN PLAN)</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="user_dashboard2.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="logout2.php">LOGOUT</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
