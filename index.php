<html>

	<head>
	</head>

	<body>
		<h1>Welcome to my Web Server</h1>
		<h3>This web server hosts the Organic Food online store.</h3><br>
		<br><br>
		<hr>
		
		<h2> Search products by name </h2>
		<form action="/search_keyword.php">
			<label for="search">Search for a product:</label><br>
			<input type="text" id="search" name="input_keyword"><br>
			<br>
			<input type="submit" value="Enter">
		</form>		
		<hr>
		
				
		<?php
			// Includes re-usabe codes stored in separate files
			include "db_connect.php";
			include "search_keyword.php";
			include "show_all_data.php";	
		?>
		
		
		<h2> Add a new product to the database </h2>
		<form action="/add_product.php">
			<label for="product_name">Specify a product name:</label><br>
			<input type="text" id="product_name" name="input_product_name"><br>		  
		  	<br>
			<label for="product_description">Specify a product description:</label><br>
			<input type="text" id="product_description" name="input_product_description"><br>		  
		  	<br>
			<label for="product_price">Specify a product price:</label><br>
			<input type="text" id="product_price" name="input_product_price"><br>
		  	<br>
			<input type="submit" value="Add">
		</form>
		<hr>
		
		
		<?php
			// Includes re-usabe codes stored in separate files	
			include "add_product.php";
			
			$connect_obj->close();
		?>
		
		
	</body>

</html>