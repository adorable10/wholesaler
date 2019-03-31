<?php
	require('db.php');
	
?>
<!DOCTYPE>
<html>


<head>
	<title>Customer</title>
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
<style>
body{
	background: url(image2.jpg) no-repeat  ;
	background-size: cover;
}
	#nav{
	padding:0px;
	width:100%;
	height:100%;
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
					<a href="home.php" title="Go to Class"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
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
				<nav class="navbar navbar-green">
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
	
	<center><h1>List of Customer's Salary</h1></center>

	<table width="99%" border="1" style="border-collapse:collapse; background-color:white;">
		<thead>
			<tr><th><strong>Emp_id</strong></th>
				<th><strong>Salary</strong></th>
				
				<th><strong>Remarks</strong></th>
				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th></tr>
		</thead>
	
	<?php
	$query = "SELECT employee.emp_id, employee.lastname, employee.firstname,salary.salary,salary.remarks
				FROM employee
				JOIN salary
				ON employee.emp_id = salary.emp_id";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_assoc($result)) { ?>
	<tr><td align="center"><?php echo $row["firstname"]." ".$row['lastname']; ?></td>
	<td align="center"><?php echo $row["salary"]; ?></td>
	<td align="center"><?php echo $row["remarks"]; ?></td>
	<td align="center"><a href="edit.salary.php?emp_id=<?php echo $row["emp_id"]; ?>">Edit</a></td>
	<td align="center"><a href="delete.salary.php?delete=<?php echo $row["emp_id"]; ?>">Delete</a></td></tr>
	
	<?php  } ?>
	 
	 
	
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	
</body>

</html

