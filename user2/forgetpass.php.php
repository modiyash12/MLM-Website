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
            <h1>Send an OTP</h1>
            <div class="card">
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mobile Number</label>
                                <input type="number" class="form-control" id="number" name="number" placeholder="Enter Number">
                            </div>
                            <button type="submit" name="sendotp" class="btn btn-success">Send OTP</button>
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

if(isset($_POST['sendotp'])){
    
     $_SESSION['mobile_number'] = $_POST['number'];
     $mobileNumber = $_SESSION['mobile_number']; 
        
    //Your message to send, Add URL encoding here.
    $message = 'Welcome to Sagar Sales: Your verification OTP code is ##OTP##.';
    
    //Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
);

//API URL
$url="https://control.msg91.com/api/sendotp.php?authkey=$authkey&mobile=$mobile_no&message=$message&sender=$senderid&otp=$otp";


$curl = curl_init($url);

curl_setopt_array($curl, array(
 // CURLOPT_URL => "https://control.msg91.com/api/sendotp.php?authkey=%24authkey&mobile=%24mobile_no&message=%24message&sender=%24senderid&otp_expiry=&otp_length=&country=&otp=%24otp&email=&template=",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $postData,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
    
if ($err) {
  echo "cURL Error #:" . $err;
} 
else{
    $json = json_decode($response);
    
    if($json->type == 'success'){
        header('Location: verifyotp.php');
    }
    if($json->type == 'error'){
        echo 'Your OTP"'.$json->message.'" ';
    }
}
    
}
?>
