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
            <h1>Verify OTP</h1>
            <div class="card">
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="exampleInputPassword1">OTP</label>
                                <input type="number" class="form-control" id="otpnumber" name="otpnumber" placeholder="Enter Your OTP">
                            </div>
                            <button type="submit" name="verifyotp" class="btn btn-success">Verify OTP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
session_start();

//Your authentication key   
$authKey = "339221AdiJW1Mm55f3ab960P1";  
  
//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "SaSale";    
   
 if(isset($_POST['verifyotp'])){
      $mobileNumber =$_SESSION['mobile_number'];
      $otpverify = $_POST['otpnumber'];
      
//API URL
$url="https://api.msg91.com/api/v5/otp/verify?mobile=$mobileNumber&otp=$otpverify&authkey=$authKey";      
      
$curl = curl_init($url);

curl_setopt_array($curl, array(
  //CURLOPT_URL => "https://api.msg91.com/api/v5/otp/verify?mobile=%24mobile&otp=%24otp&authkey=%24authentication_key",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $json = json_decode($response);
    
    if($json->type == 'success'){
        header('Location: setpassword.php');
    }
    if($json->type == 'error'){
        echo 'Your OTP is not verified"'.$json->message.'" ';
    }
}

  }   
    
?>
