<html>
<head>
<link rel="stylesheet" href="css/login.css">	
</head>

<script>
 //node npm sass git bover  task automation
function checkall(){
	
	var e1 =document.getElementById('login').value;
	var e2 =document.getElementById('pass').value;
	
	if(e1 == "" || e2 == ""){
	    alert('empty feilds');
	}
	
}

</script>


<form action = "homepage.php" method ="post" role = "form" class = "form-inline" >
	
	<!--
	 <div class="form-group">
		<label for="login">Username:</label>
		<input type="text" class="form-control" id="login">
	 </div>
	
	<div class="form-group">
		<label for="pass">Password:</label>
		<input type="password" class="form-control" id="pass">
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-primary" value="send" name="submit" />
		</div>
	</div>
	-->
<div id = "main" >

	<label for="login" >Username</label><input type = "text" name="username" id = 'login' value=""/><br/>
	<label for="pass" >Password </label><input type ="password" name ="password" id='pass' value="" /><br/>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type ="submit" value  ="Login" onclick="checkall()"/><br/>
	<a href ='sign-up.php'>Sign-up</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href ='admin.php'>admin login</a>


</div>
</form>

	
</html>

