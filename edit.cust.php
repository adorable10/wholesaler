<?php
 
require('db.php');

$cust_id=$_GET['cust_id'];
$query = "SELECT * FROM `customer` WHERE cust_id='$cust_id'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE>
<html>


<head>
	<title>Edit Customer</title>
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
					<a href="add_cust.php" title="Go to Class"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Customer</a>
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
	$cust_id = $_POST['cust_id'];
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	$update="UPDATE `customer` SET `cust_id`=$cust_id, `lastname`='$lastname',`firstname`='$firstname',`middlename`='$middlename',`address`='$address' ,`number`='$number' WHERE `cust_id`='$id'";
	$result = mysqli_query($con, $update) or die(mysqli_error());
	if($result==true){
		header("Location: customer.php");
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
		<input type="hidden" name="id" value="<?php echo $row['cust_id']?>" />
		<input type="text" name="cust_id" placeholder="Cust_id" required value="<?php echo $row['cust_id']?>" />
		<input type="text" name="lastname" placeholder="Lastname" required value="<?php echo $row['lastname']?>" />
		<input type="text" name="firstname" placeholder="Firstname" required value="<?php echo $row['firstname']?>" />
		<input type="text" name="middlename" placeholder="Middlename" required value="<?php echo $row['middlename']?>" />
		<input type="text" name="address" placeholder="Address" required value="<?php echo $row['address']?>" />
		<input type="text" name="number" placeholder="number" required value="<?php echo $row['number']?>" />
		<input name="update" type="submit" value="UPDATE" />
		</form>
		


	</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	
</body>

</html

