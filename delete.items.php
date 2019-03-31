<?php
$con = new mysqli("localhost","root","","store");

if (isset($_GET['delete']));{
	$item_id = $_GET['delete'];
	$con->query ("DELETE FROM `items` WHERE item_id ='$item_id'") or die($con->error()); 
	header("Location: items.php");
}
	
?>