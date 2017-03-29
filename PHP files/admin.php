<?php
session_start();
$username ='admin';
$password = 'pass';

if(!empty($_POST['username']) && !empty($_POST['password'])){
	
	if($_POST['username'] != $username || $_POST['password'] != $password){
		echo '<script>alert("Incorrect username password combination")</script>';
		
	}
	else{
		$_SESSION['admin'] = $username;
		echo "<script>window.location.href ='adminhome.php' </script>";
	}
	
}



?>
<html>
<head>
<style>
#main{
	text-align: center;
	margin-top:180px;
}
label{
	display:inline-block;
	width:100px;
	text-align:left;
	font-size:17px;	
}
#out{
	text-align:center;
	font-size:20px;
}
#bbn{
	width:60px;
	height:25px;
}
</style>
</head>
<form action ='admin.php' method ='post'>
<div id = "main">

<label for = "uname">username </label><input type ='text' name ='username' id="uname"><br>
<label for="pass" >  password </label><input type ='password' name = 'password' id="pass"><br> 
<input type ='submit' value ='log in' id="bbn">
</div>
</form>
<p id = "out" ><a href ='logout.php'>Log out </a></p>
</html>