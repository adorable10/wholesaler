<?php
 
include('db.php');
	
	//check connection
	
	if($con === false){
		die("ERROR: Could not connect." .mysqli_connect_error());
	}
	$status='';
	if(isset($_POST['submit'])){
	$item_id = $_POST['item_id'];
	$description = $_POST['description'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$price= $_POST['price'];
	
	
	$query = "SELECT item_id FROM items WHERE item_id='$item_id'";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result)>0){
		$status = "ID is already taken!";
	}else{
		$sql = "INSERT INTO items (item_id, description, quantity, unit, price) VALUES ('$item_id', '$description', '$quantity', '$unit', '$price')";
	
	if(mysqli_query($con, $sql)){
		echo "Successfully Added!";
		header("Location: items.php");
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
					<a href="employee.php" title="Go to Class"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
				</li>
				<li>
					<a href="add_item.php" title="Go to Class"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Item</a>
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
		<input type="text" name="item_id" placeholder="Item_id" required />
		<input type="text" name="description" placeholder="Description" required />
		<input type="text" name="quantity" placeholder="Quantity" required />
		<br /><br />
		<select name="unit" class="form-control"required>
			<option value="">option</option>
			<option value="Kilogram">Kilogram</option>
			<option value="Sacks">Sack</option>
			<option value="Box">Box</option>
			<option value="Piece">Piece</option>
			<option value="Pack">Pack</option>
			<option value="Bundle">Bundle</option>
			<option value="Bottle">Bottle</option>
		</select>
		<input type="text" name="price" placeholder="Price" required />
		<input name="submit" type="submit" value="Save" />
		</form>
		


	</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	
</body>

</html

