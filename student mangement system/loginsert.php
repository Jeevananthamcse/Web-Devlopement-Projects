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
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)

		
		$email = $_REQUEST['email'];
		$pnum = $_REQUEST['pnum'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO login VALUES ('$email','$pnum')";
		
		if(mysqli_query($conn, $sql)){
			header('Location:index.php'); 
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
