<?php
include('config.php');
        $sql="SELECT * FROM `admin`";
$result = mysqli_query($conn, $sql) ;
$row = mysqli_fetch_assoc($result);

?> <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong><p>Copyright &copy <?php echo $row['name']; ?> <?php echo $row['subname']; ?></p></strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b></b> 
    </div>
  </footer>
</div>
<!-- ./wrapper -->


