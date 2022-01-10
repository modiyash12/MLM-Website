<?php
include('header.php');
?>
 <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-lg-4 col-sm-4 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">ACCOUNT HOLDER NAME</span>
                <span class="info-box-number">
                  <?Php echo $b['accountname']; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-lg-4 col-sm-4 col-md-4">
            <div class="info-box mb-3">
            	
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-rupee-sign"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">BANK ACCOUNT NO</span>
                <span class="info-box-number"> <?Php echo $b['accountno']; ?>0</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
		<div class="col-lg-4 col-sm-4 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-database"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">IFSC CODE</span>
                <span class="info-box-number">
                  <?Php echo $b['ifsc']; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

         <div class="row">
          
          <!-- /.col -->
          <div class="col-lg-6 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-city"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">PHONE PAY UPI</span>
                <span class="info-box-number"> <?Php echo $b['phonepay']; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-lg-6 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-database"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">PAYTM UPI</span>
                <span class="info-box-number">
                   <?Php echo $b['paytm']; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
     </div>


      <div class="row">
          
          <!-- /.col -->
          <div class="col-lg-3 col-sm-3 col-md-3">
          </div>

          <div class="col-lg-6 col-sm-6 col-md-6">

            <a href="/amitbhai2/logo.png" download="qr.png"> <img src="/amitbhai2/admin/uploads/qr.png" style="height: 500px; width: 400px;"></a>
             
          </div>

            <div class="col-lg-3 col-sm-3 col-md-3">
          </div>
          <!-- /.col -->
     </div>
            <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>

    
<?php
include('footer.php')
?>