<?php
session_start();



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

    // Validate the login credentials
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    $query = "SELECT * FROM login_validation WHERE username = '$input_username' AND password = '$input_password'";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $input_username;

        header("Location: dashboard.php");
    } else 
        echo 'incorrect password';
    }

    $conn->close();

?>
