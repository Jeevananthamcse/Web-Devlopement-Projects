<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>
<body>
	
		<?php

		

		// Taking all 5 values from the form data(input)
		$dob = $_REQUEST["day"]."-".$_REQUEST['month']."-".$_REQUEST['year'];
		//echo $dob;
		
		$day = date('l', strtotime($dob));
		echo $day;
		if($day =="Monday"){
				header('Location:monday1.php');
		}
		if($day =="Tuesday"){
			header('Location:tuesday.php');
		}
		if($day =="Wednesday"){
			header('Location:wednesday.php');
		}
		if($day =="Thursday"){
			header('Location:thursday.php');
		}
		if($day =="Friday"){
		header('Location:friday.php');
		}
		if($day =="Saturday"){
		header('Location:saturday.php');
		}
		if($day =="Sunday"){
		header('Location:sunday.php');
		}

		
		
		//var_dump($day);
		?>
</body>

</html>
</html>