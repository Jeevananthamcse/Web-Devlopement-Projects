
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
		$conn = mysqli_connect("localhost", "root", "", "student");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)
		$regno = $_POST["regno"];
		$mark1 = $_REQUEST['mark1'];
		$mark2 = $_REQUEST['mark2'];
		$mark3 = $_REQUEST['mark3'];
		$mark4 = $_REQUEST['mark4'];
		$mark5 = $_REQUEST['mark5'];

		/*$limit = count($regno);
		echo"$limit".$limit;
		echo "sankar";*/
		// Performing insert query execution
		// here our table name is student
		//$sql = "INSERT INTO student VALUES ('$regno','$mark1','$mark2','$mark3',
		//	'$mark4','$mark5')";
$sql="UPDATE student SET mark1 = '$mark1' , mark2 = '$mark2' , mark3 = '$mark3' , mark4 = '$mark4',mark5 = '$mark5'
WHERE regno='$regno'";
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored successfully.</h3>";
				header('Location:homeadmin.php');
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
