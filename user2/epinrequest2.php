<?php
require('config.php');


session_start();

    $val = $_SESSION['memberid'];


if(isset($_POST['upload'])){
  $no_of_epin = mysqli_real_escape_string($conn, $_POST['no_of_epin']);

        $file_name= $_FILES['upload']['name'];
        $file_type= $_FILES['upload']['type'];
        $file_size= $_FILES['upload']['size'];
        $file_temp_loc=$_FILES['upload']['tmp_name'];
        $file_store= "receipt2/".$val.".png";

        move_uploaded_file($file_temp_loc,$file_store);
              

        $sql= "INSERT INTO `pinrequest_g` (`memberid`,`noofpin`,`date`) values('$val','$no_of_epin',now())";

        $conn->query($sql); 
        $new_id = mysqli_insert_id($conn);

            echo "<script>alert('EPIN REQUEST SUCCESSFULLY SENT');document.location='epinrequest2.html'</script>";

        }

    else {
                    echo "<script>alert('EPIN REQUEST FAILED');document.location='epinrequest2.html'</script>";

            }

                    $conn->close();

 ?>

 