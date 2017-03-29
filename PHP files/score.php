<?php
include 'connect.inc.php';
$query = "select ans from questions ";

$query_run = mysql_query($query);

$total=5;
$i = 1;
$tt = 0;
while($i <= $total ){
	
	if(!empty($_POST['q'.$i])){
	if($_POST['q'.$i] == mysql_result($query_run ,$i-1 ,'ans'))
		$tt+=1;
	}
	$i++;
}

echo "<html><div id = 'score'>score : $tt / $total </div></html>";
?>
<html>
<head>
<style>
#score{
	text-align:center;
	font-size:22px;
}
#logout{
	text-align:center;
	font-size:22px;
}
</style>
</head>
<div id="logout"><a href ='logout.php'>logout</a></div>
<html>