
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
$url="https://control.msg91.com/api/sendotp.php?authkey=$authkey&mobile=$mobile_number&message=$message&sender=$senderid&otp=$otp";


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
