<?php

// session_start();

if ($_SERVER['SERVER_NAME'] == 'www.localhost') {
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "academy09";
    $base_url = "https://localhost/academy/";
    $environment = 'localhost';
} else {
    $servername = "localhost";
    $username = "academy0_agency";
    $password = "Y]4k#EEokye-";
    $dbname = "academy0_live";
    $base_url = "https://academy09.com/";
    $environment = 'staging';
    $admin_url = "https://academy09.com/admin/";
}

date_default_timezone_set('Asia/Calcutta');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
    die("Connection failed: ");
}
$admin_list = array(
    'admin@academy09.com' =>['password' => 'academyadmin@123',],
);
 

