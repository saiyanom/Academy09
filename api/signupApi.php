<?php 
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

include 'config.php';
include 'function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email        = htmlspecialchars($_POST['email']);
  $token        = htmlspecialchars($_POST['token']);
  $created_at   = date("Y-m-d H:i:s");

  
   //validate google recaptcha
    if($token){
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = '6LfuiH8cAAAAAIbwNLxRT0VZ_hroRy8FBZP1Q8C8';

        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $token);
        $recaptcha = json_decode($recaptcha);

        // print_r($recaptcha);
        // Take action based on the score returned:
        if ($recaptcha->success == 1 && $recaptcha->score >= 0.1) {
            // Verified - send email
        } else {
          die('{"status":0,"message":"Recaptcha validation failed"}');
        }
    }else{
      die('{"status":0,"message":"Required fields are missing"}');
    }


  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('{"status":0,"message":"Email id is invalid"}');
  }


  $stmt = $conn->prepare("SELECT * FROM signup WHERE email=?");
  $stmt->bind_param("s", $email);
  $stmt->execute(); 
  $user = $stmt->fetch();

  if ($user) {
        // email found
        die('{"status":1,"message":"success"}');
  }else{
        // insert
        $stmt = $conn->prepare("INSERT INTO signup ( email, created_at) VALUES (?, ?)");
        
        /*if ( false===$stmt ) { //check if no error//for debugging
          die('prepare() failed: ' . htmlspecialchars($conn->error));
        }*/

        $stmt->bind_param("ss", $email, $created_at);

        if ($stmt->execute()) { 
            die('{"status":1,"message":"success"}');
        } 
        else {
          die('{"status":0,"message":"Failed to save data"}');
        }
  }
  
    
}else{
  die("Access Denied");
}   
?>

