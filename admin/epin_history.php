
<?php
include('adminheader.php');
?>

<form action="filter2.php" method="POST">

                   <div class="row">

                    <div class="col-sm-5">
                      <div class="form-group">
                        <label></label>
                         <input type="text" class="form-control" name="q"  placeholder="Search Query">
                      </div>
                    </div>

                    <div class="col-sm-5">
                     <div class="form-group">
                        <label>SELECT SEARCH PREFRENCE</label>
                        <select  class="form-control" name="column" required>
                         <option value="noofpin">NO OF PIN</option>
                          <option value="memberid">MEMBER ID</option>
                        <option value="status">REQUEST STATUS</option>

                       </select>
                      </div>
                    </div>

                       <div class="col-sm-2">
                      <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit" name="submit">
                          <i class="fas fa-search"></i>
                        </button>
                       </div>
                     </div>


                  </div>

          
        </form>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    </div>
    </section>

    
 <div class="row">
   <div class="col-12 col-sm-6 col-md-12">

      <div class="card" style="margin-left: 10px;">
              <div class="card-header border-transparent">
                <h3 class="card-title">E-PIN HISTORY(SILVER PLAN)</h3>

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
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
       <th>ID</th>
       <th>RECEIPT</th>
       <th>MEMBER ID</th>
    <th>USER NAME</th>
    <th>NO OF PINS</th>
    <th>DATE</th>
    <th>STATUS</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php
                    include('config.php');
                    $sql= "SELECT * FROM `pinrequest` WHERE `status`='close' or `status`='cancel'";
                      $result = $conn->query($sql);

                    if($result -> num_rows > 0){
                             while($row = $result ->fetch_assoc()){
                              $memberid=$row['memberid'];
                              $id=$row['id'];

                              $sql_user=mysqli_query($conn,"SELECT `name` from `user` WHERE `memberid`='$memberid' LIMIT 1");
                              $result_user =mysqli_fetch_array($sql_user);

                              $img_address ="/amitbhai2/user/receipt/".$memberid.".png";

                                 ?>

                      <tr> 
                      <td> <?php echo $row["id"]; ?> </td>
                      <td><a href="<?php echo $img_address; ?>" target="blank"> <img src ="<?php echo $img_address ; ?>" height="50" width="50"></a> </td>
                                             <td> <?php echo $memberid; ?> </td> 
                       <td>  <?php echo $result_user["name"]; ?> </td> 
                     <td> <?php echo $row["noofpin"]; ?> </td>
                      <td> <?php echo $row["date"] ;?> </td>
                       <td> <?php echo $row["status"]; ?> </td> 
                     </tr>             

                   <?php }}?>

                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card
 </div>

  </div>

  <?php
include('adminfooter.php');
?>
