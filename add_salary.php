<?php
 
include('db.php');
	$sql1 = "SELECT * FROM employee";
	$query1 = mysqli_query($con,$sql1);
	//check connection
	
	if($con === false){
		die("ERROR: Could not connect." .mysqli_connect_error());
	}
	$status='';
	if(isset($_POST['submit'])){
	$emp_id = $_POST['emp_id'];
	$salary = $_POST['salary'];
	$remarks = $_POST['remarks'];
	
	$query = "SELECT emp_id FROM salary WHERE emp_id='$emp_id'";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result)>0){
		$status = "ID is already taken!";
	}else{
		$sql = "INSERT INTO salary (emp_id, salary,remarks) VALUES ('$emp_id', '$salary', '$remarks')";
	
	if(mysqli_query($con, $sql)){
		echo "Successfully Added!";
		header("Location: salary.php");
	}else{
		echo "ERROR: Could not connect $sql. " .mysqli_error($con);
	}
	}
	}
?>
<!DOCTYPE>
<html>


<head>
	<title>Add Customer</title>
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
					<a href="salary.php" title="Go to Class"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
				</li>
				<li>
					<a href="add_salary.php" title="Go to Class"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Salary</a>
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
		<select name="emp_id" placeholder="Emp_id" class="form-control" required>
		<option></option>
				<?php while($row = mysqli_fetch_array($query1)):?>
			<option value="<?php echo $row['emp_id']?>"><?php echo $row['emp_id'] . " ". $row['lastname'] . " " . $row['firstname']?></option>
				<?php endwhile;?>
		</select>
		<input type="text" name="salary" placeholder="Salary" required />
		<input type="text" name="remarks" placeholder="Remarks" required />
		<input name="submit" type="submit" value="Save" />
		</form>
				

	</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	
</body>

</html

