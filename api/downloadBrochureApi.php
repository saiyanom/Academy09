<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'config.php';
include 'function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data[] = $name = htmlspecialchars($_POST['name']);
    $data[] = $mobile = htmlspecialchars($_POST['mobile']);
    $data[] = $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';

    // print_r($data);
    // die("#end");

    $token = htmlspecialchars($_POST['token']);

    $created_at = date("Y-m-d H:i:s");

    // validation
    if (strlen($name) < 1) {
        die('{"status":0,"message":"Please enter your name"}');
    } else if (!preg_match('/^\d{10}$/', $mobile)) { // phone number is valid

        die('{"status":0,"message":"Invalid mobile"}');

    } else if (!empty($email)) {
        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) { // email is valid
            die('{"status":0,"message":"Invalid email"}');
        }
    }

    // save into db
    $stmt = $conn->prepare("INSERT INTO download_brochure ( name, mobile, email, created_at) VALUES (?, ?, ?, ?)");

    /*if ( false===$stmt ) { //check if no error//for debugging
    die('prepare() failed: ' . htmlspecialchars($conn->error));
    }*/

    $stmt->bind_param("ssss", $name, $mobile, $email, $created_at);

    if ($stmt->execute()) {

        // Admin mail
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $admin_subject = "You have a new lead from Download Brochure";
        $admin_message = "Hello Team, <br><br>

              You have received a lead. Below are the details.<br>

                Name : " . ucfirst($name) . "<br>
                Mobile No. :" . $mobile . " <br>
                Email :" . $email . " <br> ";

        if ($environment == 'staging') {
        //    sendMail('omprakash.agency09@gmail.com', $admin_subject, $admin_message);
        $to = "info@academy09.com";
        mail($to,$admin_subject,$admin_message,$headers);

        }

        // User mail
        $user_subject = "Thank you for enquiry";
        $user_message = "Hello ".ucfirst($name).", <br><br>

        Thank you for your interest, our representative will be getting in touch with you shortly to help you.. <br><br>

        Thank you, <br>
        ACADEMY09
        ";
        if ($environment == 'staging') {
            //sendMail($email, $user_subject, $user_message);
        }

        die('{"status":1,"message":"success"}');
    } else {
        die('{"status":0,"message":"Failed to save data"}');
    }

} else {
    die("Access Denied");
}
