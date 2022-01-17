<?php

	// Includes a re-usabe code stored in a separate file to establish connection
	include "db_connect.php";
	
	// Gets the user inputs from the form
	$new_product_name= $_GET["input_product_name"];	
	$new_product_description= $_GET["input_product_description"];
	$new_product_price= $_GET["input_product_price"];
	
	// Addresses the issue of apostrophes
	$new_product_name= addslashes($new_product_name);
	$new_product_description= addslashes($new_product_description);
	$new_product_price= addslashes($new_product_price);
	
	// Displays the Section title and what's being added to the database
	echo "<h2> Adding a new product to the database</h2>";
	echo "<h3> Details of the new product: </h3>";
	echo "<h4> $new_product_name, <br> $new_product_description, <br> $$new_product_price</h4>";
	
 	// Adds a new product to the database
	// If only $_GET is not NULL to prevent an empty form from creating empty rows in database when restarting a web page
	if ($_GET['input_product_name'] != "") {
		$sql= "INSERT INTO product_table (Product_ID, Product_Name, Product_Descr, Product_Price) VALUES (NULL, '$new_product_name', '$new_product_description', '$new_product_price')";
		$result= $connect_obj->query($sql) or die(mysqli_error($connect_obj)); // "die" means the program will stop execution
	}
	
	echo "<br><hr>";
	//include "show_all_data.php";
	$_GET = null;
?>

<a href="index.php"> Return to Main page </a>