
<?php include('adminheader.php'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-lg-6 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">TOTAL INCOME</span>
                <span class="info-box-number"><?Php echo $c['total_earning'];?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-lg-6 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-rupee-sign"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">WALLET BALANCE</span>
                <span class="info-box-number"><?Php echo $c['wallet_balance'];?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <!-- /.col -->
        </div>

         <div class="row">
          <div class="col-lg-6 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-database"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">SILVER PLAN USER</span>
                <span class="info-box-number">
                                    <?Php echo $num_rows?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-lg-6 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-city"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">GOLDEN PLAN USER</span>
                <span class="info-box-number"><?Php echo $num_rows1?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
     </div>


      <div class="row">
          <div class="col-lg-6 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-database"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">NO OF PENDING ACCOUNTS IN SILVER PLAN</span>
                <span class="info-box-number">
                  <?Php echo $num_rows2; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-lg-6 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-city"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">NO OF PENDING ACCOUNTS IN GOLDEN PLAN</span>
                <span class="info-box-number"><?Php echo $num_rows3; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
     </div>
            <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>

    
 <div class="row">
   <div class="col-12 col-sm-6 col-md-12">

      <div class="card" style="margin-left: 10px;">
              <div class="card-header border-transparent">
                <h3 class="card-title">LAST FIVE MEMBERS</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>PHONE NO</th>
    <th>ADDRESS</th>
        <th>MEMBER ID</th>
    <th>PASSWORD</th>
    <th>REGISTRAION DATE</th>
    <th>PLAN</th>
    <th>STATE</th>
    <th>REFERAL ID</th>
    <th>AADHAAR NO</th>
    <th>PAN NO</th>
        <th>ACCOUNT NO</th>
        <th>LAST LOGIN</th>
         <th>USER STATUS</th>
          <th>BLOCK</th>
           <th>DELETE</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php
                    include('config.php');
                    $sql= "SELECT * FROM user LIMIT 5";
                      $result = $conn->query($sql);

                    if($result -> num_rows > 0){
                             while($row = $result ->fetch_assoc()){
                     echo "<tr>  <td>" . $row["id"]. "</td><td>" .$row["name"]. "</td> <td>".$row["email"]."</td> <td>" . $row["mobileno"]. "</td> 
                     <td>" . $row["address"]. "</td>  <td>" . $row["memberid"]. "</td> <td>" . $row["password"]. "</td> 
                     <td>" . $row["regdate"]. "</td> <td>" . $row["plan"]. "</td> <td>" . $row["state"]. "</td> <td>" . $row["refer"]. "</td>  <td>" . $row["aadhaar"]. "</td> 
                      <td>" . $row["panno"]. "</td> <td>" . $row["accountno"]. "</td> <td>" . $row["lastlogin"]. "</td> <td>" . $row["user_status"]. "</td>  </tr>";
          }
            echo "</table>";
              }else{echo "0 result";}
            $conn->close();
          ?>

                    </tbody>
                  </table>
                </div>
              </div>
              
            <?php include('adminfooter.php'); ?>