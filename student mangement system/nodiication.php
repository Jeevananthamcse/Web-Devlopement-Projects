<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<style>
#frm{  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: white;  
    padding: 50px;  
} 
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
		</center>
		<hr>
</body>

</html>




<?php
mysql_select_db('student',mysql_connect('localhost','root',''));
?>
<html>
<body>




<?php
$books_query=mysql_query("select * from nodi");
while($books_rows=mysql_fetch_array($books_query)){
?>
<div id = "frm">  
    <tr>
    <h1 style="color:blue;"><?php echo $books_rows['mes']; ?></h1>
    <h3><?php echo $books_rows['info']; ?></h3>

    </tr>
</div>
<?php
}
?>

</body>
</html>