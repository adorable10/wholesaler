<?php
	require('db.php');
	$sql1 = "SELECT * FROM customer";
	$query1 = mysqli_query($con,$sql1);
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
	{
  box-sizing: border-box;
 
}

body {
   margin:10px;
  padding:0px;
  width:100%;
  height:100%;
}

.column {
  float: left;
  width: 32.00%;
  padding: 5px;
  height: 500px;
  margin: 5px;
  
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.footer {
  background-color: black;
  padding: 10px;
  text-align: center;


}
@media (max-width: 600px) {
  .column {
    width: 100%;
  }
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  border-box: box-sizing;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: left;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: left;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>

<body>
	<div class="container-fluid" id="container">
    <div id="wrapper">
		
       <!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<img src="image2.jpg"  />
				</li>
				<br>
				<li>
					<a href="home.php" title="Go to Class"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
				</li>
				<li>
					<a href="employee.php" title="Go to Class"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employee</a>
				</li>
				<li>
					<a href="customer.php" title="Go to Subject"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer</a>
				</li>
				<li>
					<a href="Items.php" title="Go to Student"><span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item</a>
				</li>
				
				<li>
					<a href="salary.php" title="To-do-List"><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salary</a>
				</li>
				<li>
					<a href="report.php" title="To-do-List"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reports</a>
				</li>
				<li>
					<a href="logout.php" title="To-do-List"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
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
		<div class="row">
	<div class="dropdown column"  style="height:60px;">
		<button onclick="myFunction()" class="form-control">ITEMS</button>
			<div id="myDropdown" class="dropdown-content">
				<input type="text" placeholder="Search.." id="myInput" onkeyup="loadproducts()">
			</div>
	</div>
	<script>
	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}

	function loadproducts() {
		var input, filter, ul, li, a, i;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		div = document.getElementById("myDropdown");
		a = div.getElementsByTagName("a");
		for (i = 0; i < a.length; i++) {
			txtValue = a[i].textContent || a[i].innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				a[i].style.display = "";
			} else {
				a[i].style.display = "none";
			}
		}
	}
	</script>
	<div class="column"  style="height:60px;">
		<select name="cust_id" id="customer"  placeholder="Cust_id" class="form-control" required>
		<option>Customer</option>
				<?php while($row = mysqli_fetch_array($query1)):?>
			<option value="<?php echo $row['cust_id']?>"><?php echo $row['cust_id'] . " ". $row['lastname'] . " " . $row['firstname']?></option>
				<?php endwhile;?>
		</select>
	</div>
	<div class="column"  style="height:60px;">
		<div class="form-control"<h1 id="total"> Total: 0.0</h1></div>
		 
	</div>
	
	</div>
	<div class="row">
		<div class="column" style="background-color:#808080;"> 
			<table width="99%" border="1" style="border-collapse:collapse; background-color:white;">
		
				<thead>
				<tr>
				<th><strong>Item_id</strong></th>
				<th><strong>Description</strong></th>
				<th><strong>Quantity</strong></th>
				<th><strong>Unit</strong></th>
				<th><strong>Price</strong></th>
				</tr>
				
				<tbody id="items">
				</tbody>
				
				</thead>
				
				</table>
		
		</div>
	
		<div class="column" style="background-color:#808080;">
			<table width="99%" border="1" style="border-collapse:collapse; background-color:white;">
		
				<thead>
				<tr>
				<th><strong>Sales_id</strong></th>
				<th><strong>Total</strong></th>
				<th><strong>Cust_id</strong></th>
				<th><strong>Date</strong></th>
				</tr>
				</thead>
		
	
		<tbody>
			
	<?php
	$sel_query="Select sales.sales_id,SUM(sales_item.quantity * sales_item.price) as total,date,cust_id from sales,sales_item,items WHERE sales.sales_id = sales_item.sales_id AND items.item_id = sales_item.item_id GROUP BY sales_item.sales_id";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result)) { ?>
	<tr><td align="center"><?php echo $row["sales_id"]; ?></td>
	<td align="center"><?php echo $row["total"]; ?></td>
	<td align="center"><?php echo $row["cust_id"]; ?></td>
	<td align="center"><?php echo $row["date"]; ?></td></tr>
	</tbody>
	<?php  } ?></table>
		</div>
		<div class="column" style="background-color:#808080;">
			<table width="99%" border="1" style="border-collapse:collapse; background-color:white;">
		
				<thead>
				<tr>
					
				<th><strong>Item_id</strong></th>
				<th><strong>Quantity</strong></th>
				<th><strong>Unit</strong></th>
				<th><strong>Price</strong></th>
				<th><strong>Total</strong></th>
				</tr>
				</thead>
				<tbody  id="salestable">
				</tbody>
				</table>
				
	
		<center><input name="submit" class="add" type="submit" value="Add" /> </center>
			</div>
		</div>

		<div class="footer">
			
		</div>

	
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="script.js"></script>

	
</body>

</html

