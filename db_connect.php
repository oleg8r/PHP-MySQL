<?php

	// Creates 4 varibles, because a SQL connection needs 4 pieces of information
	$server_name= "localhost";
	$user_name= "root";
	$user_password= "usbw";
	$database_name= "test";
	
	// OPEN CONNECTION TO DATABASE
	// Creates a database connection instance to configures host, database, account and password using mysqli_connect. 
	// mysql_connect is deprecated. mysqli_connect stand for "improved"
	$connect_obj= new mysqli($server_name, $user_name, $user_password, $database_name);
	
	// Checks connection
	if($connect_obj->connect_errno) {
		echo "Failed to connect to MySQL: (" . $connect_obj->connect_errno . ") " . $connect_obj->connect_errno;
	}
	
/* 	echo "<h2> Information about opened connection to database </h2>";
	echo $connect_obj->host_info . "<br>";

	echo "<br><hr>"; */
	
	/*
	if ($connect_obj->connect_error) {
	  die("Connection failed: " . $connect_obj->connect_error);
	}
	*/
	
	/*
	$connect_obj= new connect_obj("127.0.0.1", "user", "password", "database", 3306);
	echo $connect_obj->host_info . "\n";
	*/
?>