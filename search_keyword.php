<?php

	// Includes a re-usabe code stored in a separate file to establish connection
	include "db_connect.php";
	
	// Gets the user input from the form
	$sql_keyword= $_GET["input_keyword"];
	
	// Addresses the issue of apostrophes
	$sql_keyword= addslashes($sql_keyword);
	
	// Displays what word is being searched for
	echo "Searching for '$sql_keyword'";
	
	// Searches the database for the specific word
	echo "<h2> Showing products with the word '$sql_keyword' in the name:</h2>";
	$sql= "SELECT Product_ID, Product_Name, Product_Descr, Product_Price FROM product_table WHERE Product_Name LIKE '%" . $sql_keyword . "%'";
	$result= $connect_obj->query($sql);

	if ($result->num_rows > 0) {
	  // Outputs data of each row
	  while($row= $result->fetch_assoc()) {
		// Dot (".") is a concatinate symbol in PHP
		echo "Product No: " . $row["Product_ID"]. "<br>". " - Product Name: " . $row["Product_Name"]. "<br>". " - Product Description: " . $row["Product_Descr"]. "<br>". " - Product Price: " . "$" . $row["Product_Price"]. "<br>";
	  }
	} else {
	  echo "0 results";
	}
	
	echo "<br><hr>";
	$_GET = null;
?>