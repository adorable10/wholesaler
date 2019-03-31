<?php
$con = new mysqli("localhost","root","","store");

if (isset($_GET['delete']));{
	$cust_id = $_GET['delete'];
	$con->query ("DELETE FROM `customer` WHERE cust_id ='$cust_id'") or die($con->error()); 
	header("Location: customer.php");
}
	
?>