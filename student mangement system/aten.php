<?php
$conn = mysqli_connect("localhost", "root", "", "student");
foreach ($_POST['score'] AS $regno => $score)
    {
        
		$sql="UPDATE student SET atten = '$score' WHERE regno='$regno'";
		
        mysqli_query($conn, $sql);
		echo "data inserted";
		echo"\n";
    }


?>