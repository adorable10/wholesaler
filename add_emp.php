<?php
 
include('db.php');
	
	//check connection
	
	if($con === false){
		die("ERROR: Could not connect." .mysqli_connect_error());
	}
	$status='';
	if(isset($_POST['submit'])){
	$emp_id = $_POST['emp_id'];
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	
	$query = "SELECT emp_id FROM employee WHERE emp_id='$emp_id'";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result)>0){
		$status = "ID is already taken!";
	}else{
		$sql = "INSERT INTO employee (emp_id, lastname, firstname, middlename) VALUES ('$emp_id', '$lastname', '$firstname', '$middlename')";
	
	if(mysqli_query($con, $sql)){
		echo "Successfully Added!";
		header("Location: employee.php");
	}else{
		echo "ERROR: Could not connect $sql. " .mysqli_error($con);
	}
	}
	}
?>
<!DOCTYPE>
<html>


<head>
	<title>Add Employee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="image2.jpeg" />
	<link rel="stylesheet" type="text/css" href="login.css" />

	
	
	<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	
    <link href="css/phonebook.css" rel="stylesheet">
	<script src="bootstrap-3.3.7/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="js/phonebook.js"></script>
	<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
</head>
<style>
body{
	background: url(image2.jpg) no-repeat  ;
	background-size: cover;
}
	
</style>

<body>

    <div id="wrapper">
		
       <!-- Sidebar -->
				<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<img src="image2.jpg" />
				</li>
				<br>
				<li>
					<a href="employee.php" title="Go to Class"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
				</li>
				<li>
					<a href="add_emp.php" title="Go to Class"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Employee</a>
				</li>
				
				
			</ul>
		</div>

		
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
				<!-- Menu -->
				<nav class="navbar navbar-green" id="nav">
					<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="glyphicon glyphicon-menu-hamburger"></span>
							<span class="icon-bar"></span>                       
							</button>
							<a class="navbar-brand" onclick="openNav()"><span  class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;<strong></strong></a>
					</div>
					<h3 style="padding-bottom:20px;">Danny Store</h3>
					</div>
				</nav>

				
			</div>
        </div>

    </div>
	
	<div class="header">
	<p class="text-danger"><?php echo $status ;?></p>
		<center><h1>Fill in Form</h1></center>
		<form action="" method="POST">
		<input type="text" name="emp_id" placeholder="Emp_id" required />
		<input type="text" name="lastname" placeholder="Lastname" required />
		<input type="text" name="firstname" placeholder="Firstname" required />
		<input type="text" name="middlename" placeholder="Middlename" required />
		<input name="submit" type="submit" value="Save" />
		</form>
		


	</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	
</body>

</html

