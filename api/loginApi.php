<?php 

include 'config.php';
include 'function.php';


// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = 'localhost';
    $username = 'root';
    $password = ''; 
    $database = 'academy09'; 

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

        //validate google recaptcha
        // if ($token) {
        //     $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        //     $recaptcha_secret = '6LexSFEhAAAAAJT82sb0hhVGBGOIqBJc0zLpeNDg';
    
        //     $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $token);
        //     $recaptcha = json_decode($recaptcha);
    
            // print_r($recaptcha);
            // Take action based on the score returned:
        //     if ($recaptcha->success == 1 && $recaptcha->score >= 0.1) {
        //         // Verified - send email
        //     } else {
        //         die('{"status":0,"message":"Recaptcha validation failed"}');
        //     }
        // } else {
        //     die('{"status":0,"message":"Required fields are missing"}');
        // }

    // Validate the login credentials
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    $query = "SELECT * FROM login_validation WHERE username = '$input_username' AND password = '$input_password'";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $input_username;

        header("Location: ../dashboard.php");
    } else 
        echo 'incorrect password';
    }

    $conn->close();
    ?>