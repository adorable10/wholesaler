<?php
	require('db.php');
    if (isset($_POST['username'])){
		
		$username = stripslashes($_POST['username']);   
		$username = mysqli_real_escape_string($con,$username); 
		$fname = stripslashes($_POST['firstname']);
		$fname = mysqli_real_escape_string($con,$fname);
		$lname = stripslashes($_POST['lastname']);
		$lname = mysqli_real_escape_string($con,$lname);
		$password = stripslashes($_POST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
        $query = "INSERT INTO users ( `username`, `firstname`, `lastname`,`password`) VALUES ('$username', '$fname', '$lname','".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
            header ("Location: login.php");
        }
    }else{}
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
	
	background: url(image2.jpg) no-repeat  ;
	background-size: cover;

</style>

<body>
	<div class="header">
		<center><h1>Registration Form</h1></center>
		<form action="" method="POST">
		<input type="text" name="username" placeholder="Username" required />
		<input type="text" name="firstname" placeholder="Firstname" required />
		<input type="text" name="lastname" placeholder="Lastname" required />
		<input type="text" name="password" placeholder="Password" required />
		<input name="submit" type="submit" value="Register" />
		</form>
		


	</div>


</body>
</html>
