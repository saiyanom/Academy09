<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

include 'config.php';
include 'function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data[] = $name = htmlspecialchars($_POST['name']);
    $data[] = $mobile = htmlspecialchars($_POST['mobile']);
    $data[] = $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $data[] = $background = htmlspecialchars($_POST['background']);
    $data[] = $courses = htmlspecialchars(isset($_POST['courses']) ? $_POST['courses'] : '');
    $data[] = $workshop = htmlspecialchars(isset($_POST['workshop']) ? $_POST['workshop'] : '');

    // print_r($data);
    // die("#end");

    $token = htmlspecialchars($_POST['token']);

    $created_at = date("Y-m-d H:i:s");
    $code = '+91 ';

    //validate google recaptcha
    if ($token) {
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
    } else {
        die('{"status":0,"message":"Required fields are missing"}');
    }
    /*   echo '<pre>';
    print_r($_POST);
    die;*/
    
    $admin_message_detail = '';

    // validation
    if (strlen($name) < 1 || strlen($background) < 1) {
        die('{"status":0,"message":"Required fields are missing"}');
    } else if (!preg_match('/^\d{10}$/', $mobile)) { // phone number is valid

        die('{"status":0,"message":"Invalid mobile"}');

    } else if (!empty($email)) {
        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) { // email is valid
            die('{"status":0,"message":"Invalid email"}');
        }
        $admin_message_detail .= "Email :" . $email . " <br>";
    }
    
    if(!empty($courses)){
        $admin_message_detail .= "Courses :" . $courses . " <br>";
    }
    if(!empty($workshop)){
        $admin_message_detail .= "Workshop :" . $workshop . " <br>";
    }

    // save into db
    $stmt = $conn->prepare("INSERT INTO academy_contact_us ( name, mobile, email, background, courses, workshop, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)");

    /*if ( false===$stmt ) { //check if no error//for debugging
    die('prepare() failed: ' . htmlspecialchars($conn->error));
    }*/

    $stmt->bind_param("sssssss", $name, $mobile, $email, $background, $courses, $workshop, $created_at);

    if ($stmt->execute()) {

        // Admin mail
        $admin_subject = "You have a new lead";
        $admin_message = "Hello Team, <br><br>

              You have received a lead. Below are the details.<br>

                Name : " . ucfirst($name) . "<br>
                Mobile No. :" . $code . "-" . $mobile . " <br>
                Background :" . $background . " <br> " . $admin_message_detail;

        if ($environment == 'staging') {
            sendMail('bipeen@agency09.in', $admin_subject, $admin_message);
        }

        // User mail
        $user_subject = "Thank you for enquiry";
        $user_message = "Hello ".ucfirst($name).", <br><br>

        Thank you for your interest, our representative will be getting in touch with you shortly to help you.. <br><br>

        Thank you, <br>
        ACADEMY09
        ";
        if ($environment == 'staging') {
            sendMail($email, $user_subject, $user_message);
        }

        die('{"status":1,"message":"success"}');
    } else {
        die('{"status":0,"message":"Failed to save data"}');
    }

} else {
    die("Access Denied");
}
