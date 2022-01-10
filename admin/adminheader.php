<?php
include('config.php');
include('data.php');

include('config.php');
        $sql="SELECT * FROM `admin`";
$result = mysqli_query($conn, $sql) ;
$c = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo $c['name'];?> <?php echo $c['subname'];?></title>


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel"stylesheet" href="index2cs.css">
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
        <a href="admindashboard.php" class="nav-link">Home</a>
      </li>
    




       <li>
        <div id="google_translate_element" style="margin-left: 700px;"></div>
      </li>

        <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </ul>

 <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

     <a href="admindashboard.php" class="brand-link">
      <img src="uploads/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
    <!-- Brand Logo -->
      <span class="brand-text font-weight-light" style = "margin-left: 10px;"><?php echo $c['name'];?> <?php echo $c['subname'];?></span>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="admindashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                MEMBER LIST
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="showuser.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i><i class="fa fa-file-excel-o" aria-hidden="true"></i>
                  <p>SILVER PLAN</p>
                </a>
              </li>
              <li class="nav-item">
                                <a href="showuser2.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i><i class="fa fa-file-text" aria-hidden="true"></i>
                  <p>GOLDEN PLAN</p>
                </a>
              </li>
            </ul>
          </li>

         

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                E-PIN (SILVER PLAN)
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewepin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i><i class="fa fa-file-excel-o" aria-hidden="true"></i>
                  <p>VIEW E-PIN REQUEST</p>
                </a>
              </li>
              <li class="nav-item">
                                <a href="epin_history.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i><i class="fa fa-file-text" aria-hidden="true"></i>
                  <p>E_PIN HISTORY</p>
                </a>
              </li>
            </ul>
          </li>



           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                E-PIN (GOLDEN PLAN)
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewepin2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i><i class="fa fa-file-excel-o" aria-hidden="true"></i>
                  <p>VIEW E-PIN REQUEST</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="epin_history2.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i><i class="fa fa-file-text" aria-hidden="true"></i>
                  <p>E_PIN HISTORY</p>
                </a>
              </li>
            </ul>
          </li>
    
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                ADD NEW USER
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adduser.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i><i class="fa fa-file-excel-o" aria-hidden="true"></i>
                  <p>SILVER PLAN</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="adduser2.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i><i class="fa fa-file-text" aria-hidden="true"></i>
                  <p>GOLDEN PLAN</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                E-WALLET
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i><i class="fa fa-file-excel-o" aria-hidden="true"></i>
                  <p>PAYMENT RECEIVED</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i><i class="fa fa-file-text" aria-hidden="true"></i>
                  <p>PAYOUTS</p>
                </a>
              </li>
            </ul>
          </li>
    
          <li class="nav-item">
            <a href="admintree.php" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              <p>
                TREE VIEW
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="setting.php" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              <p>
                WEBSITE SETTING
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
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
            <h1 class="m-0 text-dark">ADMIN DASHBOARD</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admindashboard.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="logout.php">LOGOUT</a> </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->