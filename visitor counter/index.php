			
<?php
$ip=$_SERVER['REMOTE_ADDR']; 
$conn = mysqli_connect("localhost", "root", "", "eworld");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$sql = "INSERT INTO visitor_count(ip) VALUES ('$ip')";
		
		if(mysqli_query($conn, $sql)){
		} 
		$sqlw="select id from visitor_count ORDER BY id DESC LIMIT 1;";
		$count1 = mysqli_query($conn, $sqlw);
		$count = $count1->fetch_assoc();

		
		// Close connection
		mysqli_close($conn);


		
		?>
<h1><span><?php echo $count['id'] ?></span></h1> 
	