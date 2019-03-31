<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link  href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="login.css" />
</head>
<style>
	
	background: url(image2.jpg) no-repeat ;
	background-size: cover;

</style>

<body>
<?php
	require('db.php');
	session_start();
    if (isset($_POST['username'])){
		
		$username = stripslashes($_POST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_POST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: home.php"); 
            }else{
				
				}
	}
?>
	<div class="header">
		<center><h1>Log In</h1></center>
		<form action="" method="POST" name="login">
		<input type="text" name="username" placeholder="Username" required />
		<input type="password" name="password" placeholder="Password" required />
		<input name="submit" type="submit" value="Login" />
		</form>
		<center><h4>Not registered yet? </h4><a href='register.php'>Register Here</a></center>


	</div>



</body>
</html>
