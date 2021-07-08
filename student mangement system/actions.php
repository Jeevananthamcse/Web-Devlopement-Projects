<?php
$conn = mysqli_connect("localhost", "root", "", "student");
foreach ($_POST['score'] AS $regno => $score)
    {
        
		$sql="UPDATE student SET mark1 = '$score' WHERE regno='$regno'";
		
        mysqli_query($conn, $sql);
		header('Location:view.php');
		echo"\n";
    }
foreach ($_POST['scor'] AS $regno => $score)
    {
        
		$sql="UPDATE student SET mark2 = '$scor' WHERE regno='$regno'";
		
        mysqli_query($conn, $sql);
		header('Location:view.php');
		echo"\n";
    }


?>