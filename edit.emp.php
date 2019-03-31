<?php
 
require('db.php');

$emp_id=$_GET['emp_id'];
$query = "SELECT * FROM `employee` WHERE emp_id='$emp_id'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
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
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<style>

</style>

<body>

    <div id="wrapper">
		
       <!-- Sidebar -->
				<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<img src="img/attendance.png" />
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
				<nav class="navbar navbar-green">
					<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="glyphicon glyphicon-menu-hamburger"></span>
							<span class="icon-bar"></span>                       
							</button>
							<a class="navbar-brand" onclick="openNav()"><span  class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;<strong></strong></a>
					</div>
					
					</div>
				</nav>

				
			</div>
        </div>

    </div>
	
<?php
	$status = "";
	if(isset($_POST['update']) && $_POST['new']==1)
	{
	$id = $_POST['id'];
	$emp_id = $_POST['emp_id'];
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$update="UPDATE `employee` SET `emp_id`=$emp_id, `lastname`='$lastname',`firstname`='$firstname',`middlename`='$middlename' WHERE `emp_id`='$id'";
	$result = mysqli_query($con, $update) or die(mysqli_error());
	if($result==true){
		header("Location: employee.php");
	}else{
		$status= "Erorr inserting!";
	}
	
	}
?>
	
	<div class="header">
	<p class="text-danger"><?php echo $status ;?></p>
		<center><h1>Fill in Form</h1></center>
		<form action="" method="POST">
		<input type="hidden" name="new" value="1" />
		<input type="hidden" name="id" value="<?php echo $row['emp_id']?>" />
		<input type="text" name="emp_id" placeholder="Emp_id" required value="<?php echo $row['emp_id']?>" />
		<input type="text" name="lastname" placeholder="Lastname" required value="<?php echo $row['lastname']?>" />
		<input type="text" name="firstname" placeholder="Firstname" required value="<?php echo $row['firstname']?>" />
		<input type="text" name="middlename" placeholder="Middlename" required value="<?php echo $row['middlename']?>" />
		<input name="update" type="submit" value="UPDATE" />
		</form>
		


	</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	
</body>

</html

