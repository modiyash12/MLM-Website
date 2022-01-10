 
<?php
include('config.php');

if (isset($_POST['approve'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);

  $query="SELECT * FROM `pinrequest_g` WHERE `id`='$id ' LIMIT 1";
  $result=mysqli_query($conn,$query);
 
   $row = mysqli_fetch_array($result);

    $memberid=$row['memberid'];
    $noofpin=$row['noofpin'];
     $id=$row['id'];

    for ($i=0; $i <$noofpin ; $i++) { 
      $epin=create_epin();
      $query_a=mysqli_query($conn,"INSERT INTO epin_list_g (`memberid`,`epin`) VALUES ('$memberid','$epin')");
    }

    $query_update=mysqli_query($conn,"UPDATE `pinrequest_g` set `status`='close' WHERE `id`='$id' LIMIT 1");
  }

  function create_epin()
  {
    $random_number=rand(100000,999999);
    $new_epin =sha1($random_number);
    return $new_epin;
  }

  if (isset($_POST['cancel'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $query_update=mysqli_query($conn,"UPDATE `pinrequest_g` set `status`='cancel' WHERE `id`='$id' LIMIT 1");

  }
  
  ?>
<?php
include('adminheader.php');
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    </div>
    </section>

    
 <div class="row">
   <div class="col-12 col-sm-6 col-md-12">

      <div class="card" style="margin-left: 10px;">
              <div class="card-header border-transparent">
                <h3 class="card-title">E-PIN REQUEST(GOLDEN PLAN)</h3>

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
    <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php
                    include('config.php');
                    $sql= "SELECT * FROM `pinrequest_g` WHERE `status`='open' ";
                      $result = $conn->query($sql);

                    if($result -> num_rows > 0){
                             while($row = $result ->fetch_assoc()){
                              $memberid=$row['memberid'];
                              $id=$row['id'];

                              $sql_user=mysqli_query($conn,"SELECT `name` from `user` WHERE `memberid`='$memberid' LIMIT 1");
                              $result_user =mysqli_fetch_array($sql_user);

                              $img_address ="/amitbhai2/user/receipt2/".$memberid.".png";

                                 ?>

                      <tr> 
                      <td> <?php echo $row["id"]; ?> </td>
                      <td><a href="<?php echo $img_address; ?>" target="blank"> <img src ="<?php echo $img_address ; ?>" height="50" width="50"></a> </td>
                                             <td> <?php echo $memberid; ?> </td> 
                       <td>  <?php echo $result_user["name"]; ?> </td> 
                     <td> <?php echo $row["noofpin"]; ?> </td>
                      <td> <?php echo $row["date"] ;?> </td>
                       <td> <?php echo $row["status"]; ?> </td> 

                       <form action="viewepin2.php" method="POST" onsubmit="return confirm('ARE YOU SURE')">
 
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                       <td>
                         <button type="submit" name="approve" class="btn-btn-success">APPROVE</button>
                        <button type="submit" name="cancel" class="btn-btn-danger">CANCEL</button>
                       </td>
                       
                     </form>

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
