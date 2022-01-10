
<?php

include('config.php'); 
include('function.php'); 
session_start();

$memberid="";
$password="";

    $memberid = $_POST['memberid'];  
    $password = $_POST['password'];  
      
        $memberid = stripcslashes($memberid);  
        $password = stripcslashes($password);  
        $memberid = mysqli_real_escape_string($conn, $memberid);  
        $password = mysqli_real_escape_string($conn, $password);  

                
      
        $sql=" SELECT `memberid`,`user_status` FROM `user` WHERE `memberid`='$memberid' AND `password`='$password'";
        $result = mysqli_query($conn, $sql);  
       if($result -> num_rows > 0){
        while($row = $result ->fetch_assoc()){

           if($row['user_status']=='PENDING'){
                echo "<script>alert('UNABLE TO LOGIN PLEASE ACTIVATE THE ACCOUNT FIRST');document.location='userlogin.html'</script>";
            }else{

            $_SESSION["memberid"] = $row["memberid"];
                       $a=$_SESSION['memberid'];


            $query="UPDATE `user` SET `lastlogin`= now() WHERE `memberid`='$a' ";
            mysqli_query($conn,$query);
        }

            echo "<script>alert('You are Successfully Login to User Dashboard');document.location='user_dashboard.php'</script>";
        }  
    }
        else{  
                        echo "<script>alert('Invalid Username or Password');document.location='userlogin.html'</script>";
        }     


?>

