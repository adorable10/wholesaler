<?php
$con = new mysqli("localhost","root","","store");

if (isset($_GET['delete']));{
	$emp_id = $_GET['delete'];
	$con->query ("DELETE FROM `employee` WHERE emp_id ='$emp_id'") or die($con->error()); 
	header("Location: employee.php");

}
	
?>