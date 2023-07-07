<?php	

session_start();

require_once '../api/config.php';





unset($_SESSION['admin']);

// session_destroy();



header('Location: '.$admin_url . "login.php");

?>