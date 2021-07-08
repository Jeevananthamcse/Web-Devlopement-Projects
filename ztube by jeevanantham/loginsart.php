<?php
	
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$con = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($con === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}  
		$email = $_POST['user'];  
	    $pnum = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $pnum = stripcslashes($pnum);  
        $email = mysqli_real_escape_string($con, $email);  
        $pnum = mysqli_real_escape_string($con, $pnum);  
      
        $sql = "select *from login where email = '$email' and pnum = '$pnum'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
            header('Location:readvideos.php'); 
        }  
		 if($email =="jeeva@gmail.com"){  
           echo "<h1> Login failed. Invalid username or password.</h1>";
        } 
        else{  
          header('Location:readvideos.php'); 
        }  
    
?>  