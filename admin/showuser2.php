<?php 
include('adminheader.php');
?>

<section class="content">
      <div class="container-fluid">

<form action="filter.php" method="POST">

                   <div class="row">

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label></label>
                         <input type="text" class="form-control" name="q"  placeholder="Search Query">
                      </div>
                    </div>

                    <div class="col-sm-4">
                     <div class="form-group">
                        <label>SELECT SEARCH PREFRENCE</label>
                        <select  class="form-control" name="column" required>
                         <option value="name">MEMBER NAME</option>
                          <option value="memberid">MEMBER ID</option>
                        <option value="refer">REFERAL ID</option>
                        <option value="state">STATE</option>
                          <option value="regdate">DATE</option>
                       </select>
                      </div>
                    </div>

                       <div class="col-sm-4">
                      <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit" name="submit">
                          <i class="fas fa-search"></i>
                        </button>
                       </div>
                     </div>


                  </div>

          
        </form>

<div class="row">
   <div class="col-12 col-sm-6 col-md-12">

      <div class="card" style="margin-left: 10px;">
              <div class="card-header border-transparent">
                <h3 class="card-title">GOLDEN PLAN MEMBERS</h3>

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
                    $sql= "SELECT * FROM user_g";
                      $result = $conn->query($sql);

                    if($result -> num_rows > 0){
                             while($row = $result ->fetch_assoc()){
                     echo "<tr>  <td>" . $row["id"]. "</td><td>" .$row["name"]. "</td> <td>".$row["email"]."</td> <td>" . $row["mobileno"]. "</td> 
                     <td>" . $row["address"]. "</td>  <td>" . $row["memberid"]. "</td> <td>" . $row["password"]. "</td> 
                     <td>" . $row["regdate"]. "</td> <td>" . $row["plan"]. "</td> <td>" . $row["state"]. "</td> <td>" . $row["refer"]. "</td>  <td>" . $row["aadhaar"]. "</td> 
                      <td>" . $row["panno"]. "</td> <td>" . $row["accountno"]. "</td> <td>" . $row["lastlogin"]. "</td> <td>" . $row["user_status"]. "</td>  <td> <a href=\"block1.php?id=$row[id]\">BLOCK</a> </td>  <td> <a href=\"delete2.php?id=$row[id]\">DELETE</a> </td> </tr>";
          }
            echo "</table>";
              }else{echo "0 result";}
            $conn->close();
          ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

<?php 
include('adminfooter.php');
?>