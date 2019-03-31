<?php
	require('db.php');
?>
<!DOCTYPE>
<html>


<head>
	<title>Items</title>
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
</style>

<body>
	<div class="container-fluid" id="container">
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
					<a href="add_item.php" title="Go to Class"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Item</a>
				</li>
				
				
			</ul>
		</div>

		
        <!-- Page Content -->
		
        <div id="page-content-wrapper">
            <div class="container-fluid" style="margin:0px; padding:0px;">
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

	  <div class="sidebar">
	  <center><h1>List of Items</h1></center>
	  <table width="99%" border="1" style="border-collapse:collapse; background-color:white;">
		
		<tbody>
			<tr>
			<th><strong>Item_id</strong></th>
			<th><strong>Description</strong></th>
			<th><strong>Quantity</strong></th>
			<th><strong>Unit</strong></th>
			<th><strong>Price</strong></th>
			<th><strong>Edit</strong></th>
			<th><strong>Delete</strong></th></tr>
			</tr>
		</tbody>
		
	  
	  </div>
	  
	  
	  
	
	  <div class="footer">
			
	  </div>

	
	</div>
	
	<?php
	$sel_query="Select * from items";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result)) { ?>
	<tr><td align="center"><?php echo $row["item_id"]; ?></td>
	<td align="center"><?php echo $row["description"]; ?></td>
	<td align="center"><?php echo $row["quantity"]; ?></td>
	<td align="center"><?php echo $row["unit"]; ?></td>
	<td align="center"><?php echo $row["price"]; ?></td>
	<td align="center"><a href="edit.items.php?item_id=<?php echo $row["item_id"]; ?>">Edit</a></td>
	<td align="center"><a href="delete.items.php?delete=<?php echo $row["item_id"]; ?>">Delete</a></td></tr>
	<?php  } ?></table>
	
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	
</body>

</html

