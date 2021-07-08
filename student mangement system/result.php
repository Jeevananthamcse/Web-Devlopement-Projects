<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM student";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM student WHERE regno ='$name'";
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
  width: 29%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 2px;
  padding-bottom: 2px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<body style="background-color:#ffffd5;">


	<center>
		
		<h1 style=>Muthayammal Polytechnic Institution</h1>
		<hr class="new1">
		<h2>MANAGEMENT INFORMATION SYSTEM</h2>
		<hr class="new1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		</center>
						&nbsp;
				&nbsp;
					&nbsp;
		<font face="cinzel" size="3">
<div class="w3-bar w3-blue">
  <a href="homeadmin.php" class="w3-bar-item w3-button w3-mobile">HOME</a>
  <a href="register.php" class="w3-bar-item w3-button w3-mobile">STUDENT ENTRY</a>
  
  <a href="index.php" class="w3-bar-item w3-button w3-mobile">LOGIN</a>
  
  <a href="view.php" class="w3-bar-item w3-button w3-mobile">VIEW</a>
  
  <a href="delete.php" class="w3-bar-item w3-button w3-mobile">DELETE</a>
  <a href="update.php" class="w3-bar-item w3-button w3-mobile">UPDATE</a>
    <a href="search.php" class="w3-bar-item w3-button w3-mobile">SEARCH</a>
</div>
		<hr>
		
		
		</font>
		<center>
<div class="container">
<label>Search</label>
<form action="" method="GET">
<input type="text" placeholder="Type the register number here" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>List of students</h2>
<table id="customers">

<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
	<th>Register number</th>
    <td><?php echo $row['regno']; ?></td>
	</tr>
	<tr>
	<th>First name</th>
    <td><?php echo $row['first_name']; ?></td>

    </tr>
    <?php
}
?>
</table>
</div>
</body>
</html>