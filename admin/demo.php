

<?php
include('config.php');
include('function.php');


  if (isset($_POST['upload'])) {

 //print_r ($_FILES['uploadpdf']);
  	 $_FILES['uploadpdf']['name'] ."<br>";
      $_FILES['uploadpdf']['type']."<br>";
     $_FILES['uploadpdf']['tmp_name']."<br>";
      $_FILES['uploadpdf']['error']."<br>";
     $_FILES['uploadpdf']['size']."<br>";

    move_uploaded_file($_FILES['uploadpdf']['tmp_name'], "pdf/".'MLM'.'.pdf');

     $_FILES['uploadlogo']['name'] ."<br>";
      $_FILES['uploadlogo']['type']."<br>";
     $_FILES['uploadlogo']['tmp_name']."<br>";
      $_FILES['uploadlogo']['error']."<br>";
     $_FILES['uploadlogo']['size']."<br>";

    move_uploaded_file($_FILES['uploadlogo']['tmp_name'], "pdf/".'logo'.'.png');
     
     $_FILES['uploadqr']['name'] ."<br>";
      $_FILES['uploadqr']['type']."<br>";
     $_FILES['uploadqr']['tmp_name']."<br>";
      $_FILES['uploadqr']['error']."<br>";
     $_FILES['uploadqr']['size']."<br>";

    move_uploaded_file($_FILES['uploadqr']['tmp_name'], "pdf/".'qr'.'.png');
     

     

 

        
}
?>

 <form action="demo.php" method="POST" enctype="multipart/form-data">

                   <div class="row">

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>UPLOAD PDF</label>
                         <input type="file" class="form-control" name="uploadpdf" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>UPLOAD LOGO</label>
                        <input type="file" class="form-control" name="uploadlogo" >
                      </div>
                    </div>


                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>UPLOAD QR CODE</label>
                        <input type="file" class="form-control" name="uploadqr" >
                      </div>
                    </div>


                  </div>

                  <div class="row">

                   <div class="col-sm-5">
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                         <input type="submit" class="form-button" name="upload" value="upload">
                      </div>
                    </div>


                    <div class="col-sm-1">
                    </div>

                  </div>

                  </div>

                </form>