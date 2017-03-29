<?php

$host = 'localhost';
$user = 'root';
$pass = '';

if(!mysql_connect($host,$user,$pass) || ! mysql_select_db('users'))
	echo 'mysql_error()';


?>