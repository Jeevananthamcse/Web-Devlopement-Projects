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
		<hr>
</body>

</html>
<?php
mysql_select_db('staff',mysql_connect('localhost','root',''));
?>
<html>
<body>
<table border="1">
<?php
$books_query=mysql_query("select * from college");
while($books_rows=mysql_fetch_array($books_query)){
?>
<table id="customers">
  <tr>
    <th>First name</th>
    <th>Last name</th>
    <th> Gender</th>
    <th>Event name</th>
    <th>College name</th>
    <th>Phone number</th>
    <th>Address</th>
    <th>Email Id</th>
  </tr>
<tr>
<td><?php echo $books_rows['first_name'] ; ?></td>
<td><?php echo $books_rows['last_name'] ; ?></td>
<td><?php echo $books_rows['gender'] ; ?></td>
<td><?php echo $books_rows['cname'] ; ?></td>
<td><?php echo $books_rows['ename'] ; ?></td>
<td><?php echo $books_rows['pnum'] ; ?></td>
<td><?php echo $books_rows['address'] ; ?></td>
<td><?php echo $books_rows['email'] ; ?></td>

</tr>
<?php }?>
</table> 
</body>
</html>