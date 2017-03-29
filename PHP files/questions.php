<!DOCTYPE html>
<?php
include 'connect.inc.php';
 session_start(); 
  if( loggedin() == 0){
	  header("Location:index.php");
  }
  
?>

<html>
<head>
<meta charset = "UTF-8">	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel= "stylesheet" href="css/questions.css">		
  
</head>
<body>
<div class="container">
<div id ="time">
Remaining time 
<span id="h"> </span>
<span id="m"> </span>
<span id="s"> </span>
</div>
<script>

var myVar = setInterval(myTimer,1000);
var e_t = new Date().getTime()+60*60*1000;

function myTimer() {
	
	var c_t = new Date().getTime();
	
	if(c_t < e_t){
		
     var r =e_t-c_t;
	 
     var s =Math.floor((r/1000)%60);	 
	 var m =Math.floor((r/(1000*60))%60);	
	 var h =Math.floor((r/(1000*60*60))%24);	 
	  document.getElementById('h').innerHTML = h;
	  document.getElementById('m').innerHTML = m;
	  document.getElementById('s').innerHTML = s;
	}
	else{
		window.location.href="score.php";
	}
}


</script>


<form action ="score.php" method ="post">

Question 1:<br>
<?php 
$query = "SELECT * from questions where id = '1' ";
$query_run = mysql_query($query);
$res = mysql_result($query_run,0,'question');
echo mysql_result($query_run,0,'question'); 

?>
<div class = "opt">
	<input type="radio" name ="q1" value ="1"><?php echo mysql_result($query_run,0,'op1'); ?><br>
	<input type="radio" name ="q1" value ="2"><?php echo mysql_result($query_run,0,'op2'); ?><br>
	<input type="radio" name ="q1" value ="3"><?php echo mysql_result($query_run,0,'op3'); ?><br>
	<input type="radio" name ="q1" value ="4"><?php echo mysql_result($query_run,0,'op4'); ?><br>
</div>
Question 2:<br>
<?php 
$query = "SELECT * from questions  where id = '2' ";
$query_run =mysql_query($query);
echo mysql_result($query_run,0,'question'); 

?>
<div class = "opt">
<input type="radio" name ="q2" value ="1"><?php echo mysql_result($query_run,0,'op1'); ?><br>
<input type="radio" name ="q2" value ="2"><?php echo mysql_result($query_run,0,'op2'); ?><br>
<input type="radio" name ="q2" value ="3"><?php echo mysql_result($query_run,0,'op3'); ?><br>
<input type="radio" name ="q2" value ="4"><?php echo mysql_result($query_run,0,'op4'); ?><br>
</div>
Question 3:<br>
<?php 
$query = "SELECT * from questions  where id = '3' ";
$query_run =mysql_query($query);
echo mysql_result($query_run,0,'question'); 

?>
<div class = "opt">
<input type="radio" name ="q3" value ="1"><?php echo mysql_result($query_run,0,'op1'); ?><br>
<input type="radio" name ="q3" value ="2"><?php echo mysql_result($query_run,0,'op2'); ?><br>
<input type="radio" name ="q3" value ="3"><?php echo mysql_result($query_run,0,'op3'); ?><br>
<input type="radio" name ="q3" value ="4"><?php echo mysql_result($query_run,0,'op4'); ?><br>
</div>
Question 4:<br>
<?php 
$query = "SELECT * from questions  where id = '4' ";
$query_run =mysql_query($query);
echo mysql_result($query_run,0,'question'); 

?>
<div class = "opt">
<input type="radio" name ="q4" value ="1"><?php echo mysql_result($query_run,0,'op1'); ?><br>
<input type="radio" name ="q4" value ="2"><?php echo mysql_result($query_run,0,'op2'); ?><br>
<input type="radio" name ="q4" value ="3"><?php echo mysql_result($query_run,0,'op3'); ?><br>
<input type="radio" name ="q4" value ="4"><?php echo mysql_result($query_run,0,'op4'); ?><br>
</div>
Question 5:<br>
<?php 
$query = "SELECT * from questions  where id = '5' ";
$query_run =mysql_query($query);
echo mysql_result($query_run,0,'question'); 

?>
<div class = "opt">
<input type="radio" name ="q5" value ="1"><?php echo mysql_result($query_run,0,'op1'); ?><br>
<input type="radio" name ="q5" value ="2"><?php echo mysql_result($query_run,0,'op2'); ?><br>
<input type="radio" name ="q5" value ="3"><?php echo mysql_result($query_run,0,'op3'); ?><br>
<input type="radio" name ="q5" value ="4"><?php echo mysql_result($query_run,0,'op4'); ?><br>
</div>
<input type ='submit' value ='submit' id="sub"/>
</form>
</div>
</body>
</html>
