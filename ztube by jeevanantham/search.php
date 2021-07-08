<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "video";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}

if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM videos WHERE des ='$name'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="m.jpg" type="image/gif">
<title>Search</title>
<link rel="stylesheet" type="text/css"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
	<img src="ztube.jpg" style="width:200px;height:100px;">
	<div class="container">

<form action="search.php" method="GET">
<input type="text" placeholder="search anything" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
	
	<a href="studio.php" target="_blank">Studio</a>
<hr>	









        <?php
        $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
		while($row = $result->fetch_assoc()){
            $location = $row['location'];
			$des = $row['des'];
   
   
       echo "<div style='float: left; margin-right: 5px;'>
          <video src='".$location."' controls width='320px' height='200px' ></video>    
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
          <br>
          
		  <h><span>".$des."</span><h3>
       </div>";
			
 }
        ?>
</table>
</div>
</body>
</html>