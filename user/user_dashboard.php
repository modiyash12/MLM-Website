<?php
include('header1.php');
?>
    <!-- Main content -->
    <section class="content">
                <div class="container-fluid">

                        <form>
                            <div class="row">

                                  <div class="col-12 col-sm-6 col-md-2">
                            <div class="form-group">
                               <label>REFERAL LINK</label>
                             </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-8">
                            <div class="form-group">
                               
                             <input type="text" value="http://localhost/amitbhai2/user2/register2.php?referid=<?php echo  $val=$_SESSION["memberid"]; ?>" id="inp" class="form-control" readonly>
                             </div>
                            </div>

                             <div class="col-12 col-sm-6 col-md-2">
                            <div class="form-group">
                               <button id="btncpy">Copy</button>
                             </div>
                            </div>

                        </div>
                    </form>
                    <!-- Info boxes -->
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-4">

                            <div class="card" style="align-items: center;">
                                <div class="card-header border-transparent"> 

                                    <!-- /.card-header -->
                                    <div class="row">

                                        <div style="width:8px;">
                                            <img src="https://d2lu257anxgb6j.cloudfront.net/0b2583f5-27ff-4c46-abb4-046ba8cab24f/images/user.png" class="rounded-circle avatar-md mr-2">
                                        </div>

                                          <div style="margin-left: 200px; margin-top: 80px;">
                                            <h5><?php echo $row['name'];?></h5>
                                            <h5><?php echo $row['memberid'];?></h5>
                                        </div>

                                    </div>

                                    <h3 align="center">ABOUT ME</h3>

                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table m-0">
                                                <thead>
                                                    <tr>
                                                        <td>NAME</td>
                                                        <td><?php echo $row['name'];?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>MOBILE NO</td>
                                                        <td><?php echo $row['mobileno'];?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>EMAIL</td>
                                                        <td> <?php echo $row['email'];?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>PLAN</td>
                                                        <td><?php echo $row['plan'];?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>KYC STATUS</td>
                                                        <td>
                                                          <?php
                                                          $x=$row['aadhaar'];
                                                          if($x==0){
                                                            echo "NOT ACTIVE";
                                                          }else{
                                                            echo " ACTIVE";
                                                          }
                                                          ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>REGISTRATION DATE</td>
                                                        <td><?php echo $row['regdate'];?></td>
                                                    </tr>

                                                </thead>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--col-->

                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">WALLET BALANCE</span>
                                    <span class="info-box-number"> <?php echo $row["wallet_balance"] ;?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">TOTAL INCOME</span>
                                    <span class="info-box-number"><?php echo $row["total_earning"] ;?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->

                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">TOTAL DOWNLINE</span>
                                    <span class="info-box-number"><?php echo $num_rows; ?> </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">MEMBER WITH ACTIVE KYC</span>
                                    <span class="info-box-number"><?Php echo $num_rows3; ?>  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->

                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">PENDING USERS</span>
                                    <span class="info-box-number"><?php echo $num_rows5; ?>  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>

                            <!-- /.info-box -->

                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">AVAILABLE PINS</span>
                                    <span class="info-box-number"><?php echo $num_rows4; ?>  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->


                        </div>

                    </div>
                    <!--/.row-->
                </div>
                <!--/. container-fluid -->
            </section>

              <!-- /.card-body -->
              <div class="card-footer clearfix">
      
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->



  </div>

  <script type="text/javascript">
                        const inp=document.getElementById('inp');
                        const btncpy=document.getElementById('btncpy');

                        btncpy.onclick=function(){
                            inp.select();
                            document.execCommand("copy");
                        };

                         </script>

  <!-- /.content-wrapper -->
<?php
include('footer1.php');
?>
  <!-- Control Sidebar -->
  