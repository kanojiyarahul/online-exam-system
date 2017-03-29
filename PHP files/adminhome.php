<?php
include 'connect.inc.php';
session_start();
if( !isset($_SESSION['admin']) ){
	header('Location:admin.php');
}


if(!empty($_POST['question']) && !empty($_POST['op1']) && !empty($_POST['op2']) && !empty($_POST['op3']) && !empty($_POST['op4']) && !empty($_POST['ans'])){
	$q= $_POST['question'];
	$o1=$_POST['op1'];
	$o2=$_POST['op2'];
	$o3=$_POST['op3'];
	$o4=$_POST['op4'];
	$ans=$_POST['ans'];
	$id =$_POST['id'];
	$query=" INSERT into questions values( '$id', '$q' ,'$o1','$o2','$o3','$o4','$ans') ";
	if($query_run = mysql_query($query)){
		echo  'Question added successfully';
	}
	else
		echo mysql_error();
	
}

if(!empty($_POST['id1'])){
	$id = $_POST['id1'];
	
	$query = " DELETE from questions where id= '$id' ";
	if($query_run = mysql_query($query)){
		echo  'Question deleted successfully';
	}
	else
		echo mysql_error();

}

?>
<html>
<head>
<style>
	label{
	display:inline-block;
	width:100px;
	text-align:left;	
	}
	body{
		font-size:20px;
		margin-left:50px;
	}
</style>
</head>
Add Questions<br>
<form action ='adminhome.php' method ='post'>
<label>id:</label><input type ='text' name ='id'><br>
<label>Question :</label><input type ='text' name ='question'><br>
<label>Option 1 :</label><input type ='text' name ='op1'><br>
<label>Option 2 :</label><input type ='text' name ='op2'><br>
<label>Option 3 :</label><input type ='text' name ='op3'><br>
<label>Option 4 :</label><input type ='text' name ='op4'><br>
<label>Ans      :</label><input type ='text' name ='ans'><br>
<input type ='submit' value ='Add'>
</form>
Delete Questions<br>

<form action ='adminhome.php' method ='post'>
Enter Id: <input type ='text' name ='id1'>
<input type ='submit' value ='Delete'>
</form>

<a href ='logout.php'>Log out</a>
</html>