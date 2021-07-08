<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>
<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => student
		$conn = mysqli_connect("localhost", "root", "", "birthday");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)
		$day = $_REQUEST["day"];
		$month = $_REQUEST['month'];
		$year = $_REQUEST['year'];                                              

		// Performing insert query execution
		// here our table name is student
		$sql = "INSERT INTO birthday VALUES ('$day','$month','$year')";
		$add=$day+$month;
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored successfully.</h3>";
			echo "<h3>$add</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>