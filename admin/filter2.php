<?php 
include('adminheader.php');
?>

<div class="row">
   <div class="col-12 col-sm-6 col-md-12">

      <div class="card" style="margin-left: 10px;">
              <div class="card-header border-transparent">
                <h3 class="card-title">E-PIN HISTORY
                </h3>

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
       <th>MEMBER ID</th>
    <th>NO OF PINS</th>
    <th>DATE</th>
    <th>STATUS</th>
          
                    </tr>
                    </thead>
                    <tbody>

<?php
include('config.php');

if (isset($_POST['submit'])) {
      
     $q = mysqli_real_escape_string($conn,$_POST['q']);
      $column = mysqli_real_escape_string($conn,$_POST['column']);



     
      $sql="SELECT * FROM pinrequest WHERE `$column` LIKE '$q'";
      $result = $conn->query($sql);

                    if($result -> num_rows > 0){
                                      while($row = $result ->fetch_assoc()){
                    echo "<tr>  <td>" . $row["id"]. "</td> <td>".$row["memberid"]."</td> <td>" . $row["noofpin"]. "</td> 
                     <td>" . $row["date"]. "</td>  <td>" . $row["status"]. "</td>  </tr>";
          
          }
                           }else{
            echo "<script>alert('NO RECORDS FOUND');document.location='epin_history.php'</script>";
                           }
                         }
?>

<?php 
include('adminfooter.php');
?>