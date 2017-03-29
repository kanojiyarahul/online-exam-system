<?php
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])){
	$http_ref = $_SERVER['HTTP_REFERER'];
} 
$login_add = 'http://localhost:8080/online-exam/';
$login2 = 'http://localhost:8080/online-exam/index.php';
$sign_up_add ='http://localhost:8080/online-exam/sign-up.php';
$home_add ='http://localhost:8080/online-exam/homepage.php';

?>

