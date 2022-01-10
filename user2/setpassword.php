<?php
    $con = mysqli_connect('',' ','')
    if(!con){
        echo 'Not Connected to server'
    }
    
    if(!msqli_select_db($con,'epiz_25739922_mlm'))
    {
        echo 'Database not selected';
    }
    
    $password = $_POST['newpassword'];
    
    $sql = "UPDATE user set password='$password' where email= $email";
    
    if(!mysqli_query($con,$sql)){
        echo 'Password Not Updated';
    }
    else{
        echo 'Password Successfully Updated';
    }
    
    header("refresh:2; url=userlogin.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1>RESET PASSWORD</h1>
            <div class="card">
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Enter New Password</label>
                                <input type="number" class="form-control" id="number" name="newpassword" placeholder="Enter Password">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="number" class="form-control" id="number" name="newpassword" placeholder="Confirm Password">
                            </div>
                            <button type="submit" name="sendotp" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
