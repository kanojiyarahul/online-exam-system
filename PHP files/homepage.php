<?php
 include 'connect.inc.php';
 include 'core.inc.php';
 
   
  if( !empty($http_ref) ){
	  
	   if($http_ref == $login_add || $http_ref == $login2){
		  
		 $user =$_POST['username'];
		 $pass =$_POST['password'];
		 if( empty($user) || empty($pass)){
			  echo '<script>alert("hello");</script>';
			  header('Location:index.php');
		 }
	 
		 $query = "SELECT username from users where username ='$user' && password = '$pass' ";
		 $query_run =mysql_query($query);
		
		 if(mysql_num_rows($query_run) >0 ){
			 echo '<html>
			 <div class = "alert alert-info">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Successfully logged in	
			 </div>
			 <html>';
			 $_SESSION['username'] = $user;
		 }
		 else{
			 header('Location:index.php');
		 }
		}
  else if($http_ref == $sign_up_add){
       $user = $_POST['username'];
	   $pass = $_POST['password'];
	   $name = $_POST['name'];
	   $roll_no = $_POST['roll_no'];
	   $query =  " INSERT into users values ('$user' ,'$pass' ,'$name' ,'$roll_no') ";
	   if(empty($user) || empty($pass) || empty($name) || empty($roll_no)){
		    $_SESSION['empty_fields'] = 'true';
		    echo "<script>window.location.href ='sign-up.php' </script>";
	   }
	   
	   if( $query_run = mysql_query($query) ){
		   $_SESSION['username'] = $user;
		   echo 'successfully signed up';
	   }
	   else{  
		 echo "<script>window.location.href ='sign-up.php' </script>";
	   }
	  
  }
  }
  else if(loggedin() == 2){
	  header("Location:index.php");
  }
  
  
?>
<html>
<head>
<link rel="stylesheet" href="css/home.css">
 <meta charset = "UTF-8">	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="well" style="background-color:#45b39D;"><h1 id ="welcome">Welcome to the test</h1></div>
<div class="well well-sm"><h2 id = "user"><?php echo $_SESSION['username']; ?></h2></div>

<div id = "rules">
	<div class="well" style="background-color:#82E0AA;"><h3>Rules</h3>
		<p id = "rr">
		This test consists of 20 multiple choice questions.<br>
		Each question has 4 options out of which 1 is correct.<br>
		Duration of the test is 1 hour.<br>
		</p>
	</div>
</div>
<h3><p id = "link"><a href = 'questions.php'>start test</a></p><h3>
</body>
</html>
