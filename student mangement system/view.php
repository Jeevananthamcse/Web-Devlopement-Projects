<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
}
</style>
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
#btn{  
    color: #fff;  
    background:#ff6347;  
    padding: 7px;  
    margin-left: 36%;  
}
</style>
		<style>       
hr.new1 {
  border: 1px solid black;
}
</style>

	<title>MPTI</title>
	
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
		<div class="w3-bar w3-red">
  <a href="homeadmin.php" class="w3-bar-item w3-button w3-mobile">HOME</a>
  
  <a href="index.php" class="w3-bar-item w3-button w3-mobile">LOGIN</a>
  
  <a href="view.php" class="w3-bar-item w3-button w3-mobile">VIEW</a>
  
  <a href="delete.php" class="w3-bar-item w3-button w3-mobile">DELETE</a>
</div>
		<hr>
		
		
		</font>
		<center>
		<hr>
</body>

</html>




<?php
mysql_select_db('student',mysql_connect('localhost','root',''));
?>
<html>
<body>

<table border="1">

<center>
<table id="customers">
<tr>
<th>Register number</th>
<th>Roll number</th>
<th>First name</th>
<th>Lastname</th>
<th>Father name</th>
<th>Mother name</th>
<th>Gender</th>
<th>Age</th>
<th>Department Name</th>
<th>Phone number</th>
<th>Email Address</th>
<th>Address</th>
<th>Mark</th>
<th>attendance</th>
</tr>
<?php
$books_query=mysql_query("select * from student");
while($books_rows=mysql_fetch_array($books_query)){
?>

    <tr>
    <td><?php echo $books_rows['regno']; ?></td>
    <td><?php echo $books_rows['rollno']; ?></td>
    <td><?php echo $books_rows['first_name']; ?></td>
    <td><?php echo $books_rows['last_name']; ?></td>
    <td><?php echo $books_rows['fname']; ?></td>
    <td><?php echo $books_rows['mname']; ?></td>
    <td><?php echo $books_rows['gender']; ?></td>
    <td><?php echo $books_rows['age']; ?></td>
    <td><?php echo $books_rows['dname']; ?></td>
    <td><?php echo $books_rows['pnum']; ?></td>
    <td><?php echo $books_rows['email']; ?></td>
    <td><?php echo $books_rows['address']; ?></td>
    <td><?php echo $books_rows['mark1']; ?></td>
	
    <td><?php echo $books_rows['atten']; ?></td>
    </tr>
<?php
}
?>
</table>
<br>
<br>
<form method="post" action="export.php" align="center">  
<input type="submit" name="export" id="btn" value="Generate CSV" class="btn btn-success" />  
 </form>  
<p><a href="genratepdf.php" target="_blank">Generate PDF</a></p>
<p><a href="excel.php" target="_blank">IMPORT CSV</a></p>
</body>
</html>