<?php
	require('db.php');
	if (isset($_POST['items'])){
		$name = mysqli_real_escape_string($con,$_POST['items']);
		$show 	= "SELECT * FROM items WHERE description LIKE '$name%' ";
		$query 	= mysqli_query($con,$show);
		if(mysqli_num_rows($query)>0){
			while($row = mysqli_fetch_array($query)){
				echo "<tr class='js-add' data-number=".$row['item_id']." data-description=".$row['description']." data-quantity=".$row['quantity']." data-unit=".$row['unit']." data-price=".$row['price']."><td>".$row['item_id']."</td><td>".$row['description']."</td>";
				echo "<td>".$row['quantity']."</td>";
				echo "<td>".$row['unit']."</td>";
				echo "<td>".$row['price']."</td>";
			}
		}
		else{
			echo "<td></td><td>No Products found!</td><td></td>";
		}
	}?>