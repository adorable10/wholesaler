<?php

include('db.php');

if(isset($_POST['item_id'])){
	$item_id = $_POST['item_id'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$price = $_POST['price'];
	$customer = $_POST['customer'];
	$sales = array();
	
	
	$sql = "INSERT INTO sales(cust_id) VALUES($customer)";
	$result = mysqli_query($con,$sql);
	if($result == false){
		echo "Something Went Wrong!";
	}else{
	$sql1 = "SELECT sales_id from sales order by sales_id desc LIMIT 1";
	$result1 = mysqli_query($con,$sql1);
	$row = mysqli_fetch_array($result1);
	
	for($i = 0; $i < count($_POST['item_id']); $i++){
		$sales[] = $row['sales_id'];
	}
	$num=0;
	while($num<count($_POST['item_id'])){
		$item_id1 = mysqli_real_escape_string($con, $item_id[$num]);
		$quantity1 = mysqli_real_escape_string($con, $quantity[$num]);
		$unit1 = mysqli_real_escape_string($con, $unit[$num]);
		$price1 	= mysqli_real_escape_string($con, $price[$num]);
		$sales1	= mysqli_real_escape_string($con, $sales[$num]);
		
		$insert = "INSERT INTO sales_item(sales_id,item_id,quantity,unit,price) VALUES($sales1,$item_id1,$quantity1,'$unit1','$price1')";
		mysqli_query($con, $insert);
		$num++;
	}
	
	if($insert==true){
		echo "Success!";
	}	
}
}
?>