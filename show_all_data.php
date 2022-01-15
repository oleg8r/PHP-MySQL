<?php

	// Sends an SQL query to the database and stores the received result in $result
	echo "<h2> Showing all products </h2>";
	$sql= "SELECT Product_ID, Product_Name, Product_Descr, Product_Price FROM product_table";
	$result= $connect_obj->query($sql);

	// Checks if there any values in the table received in $result and displays them
	if ($result->num_rows > 0) {
	  // Outputs data of each row
	  while($row= $result->fetch_assoc()) {
		// Dot (".") is a concatinate symbol in PHP
		echo "Product No: " . $row["Product_ID"]. "<br>". " - Product Name: " . $row["Product_Name"]. "<br>". " - Product Description: " . $row["Product_Descr"]. "<br>". " - Product Price: " . "$" . $row["Product_Price"]. "<br>" . "<br>";
	  }
	} else {
	  echo "0 results";
	}
	
	echo "<br><hr>";	
?>