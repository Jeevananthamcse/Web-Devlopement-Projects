<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
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
		<h2> CSE DEPARTMENT FESTIVEL</h2>
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
<?php
$books_query=mysql_query("select * from student");
while($books_rows=mysql_fetch_array($books_query)){
?>
<center>
<table id="customers">
  <tr>
  <th>Register number</th>
<th>Roll number</th>
    <th>First name</th>
    <th>DEPARTMENT </th>
  
  </tr>
<tr>
<td><?php echo $books_rows['regno']; ?></td>
<td><?php echo $books_rows['rollno']; ?></td>
<td><?php echo $books_rows['first_name'] ; ?></td>
<td><?php echo $books_rows['dname'] ; ?></td>
<td>    Attendance:
    <input type="radio" name="atten" value="PRESENT">PRESENT
    <input type="radio" name="atten" value="ABSENT">ABSENT
    <input type="radio" name="atten" value="OD">OD
      
    <br>
						<p></td>


</tr>
</center>
<?php }?>
</table> 
</body>
</html>