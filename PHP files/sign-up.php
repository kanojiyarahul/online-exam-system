<?php
include 'core.inc.php';

if( !empty($http_ref) ){
	if($http_ref == $home_add){
		
		if(!empty($_SESSION['empty_fields'])){
			echo '<script>alert("empty fields"); </script>';
			unset($_SESSION['empty_fields']);
		}
		else{
		 echo '<script>alert("Username already exists."); </script>';
		}
	}
}

?>
<html>
<head>
  <meta charset = "UTF-8">	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/sign-up.css">	
</head>
<script>
function checkpassword(){
	var e1 =document.getElementById('pass2').value;
	var e2 =document.getElementById('pass1').value;
	if(e1 != e2)
		alert('Passwords don\'t match');		
}

</script>
<body>

	<form  action = "homepage.php" method  ="post" class = "form-inline">
		<div id="main">
			<label for="un" >Username</label><input type = "text" name="username" id ='un'/><br>
			<label for="pass1" >Password</label><input type ="password" name ="password"  id ='pass1'/><br>
			<label for="pass2" >Re enter Password</label><input type ="password"  name="password1" id='pass2' onblur ="checkpassword()"/><br>

			<label for="name" >Name	</label><input type ="text"  name ="name" id ='nm'/><br>
			<label for="roll_no" >Roll no</label><input type ="text" name ="roll_no" id ='rn'  /><br>

			<input type ="submit" value  ="Sign-up" />
		</div>
	</form>
</body>
</html>