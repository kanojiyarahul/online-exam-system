<?php
$host = 'localhost';
$user = 'root';
$pass = '';

if(!mysql_connect($host,$user,$pass) || !mysql_select_db('users'))
	echo mysql_error();

function loggedin(){
	
	if( isset($_SESSION['username']) && !empty($_SESSION['username'] ) ){
		return 1;
	}
	else{
		return 0;
	}
}


?>