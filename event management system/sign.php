<!DOCTYPE html>
<html lang="en">

<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color:#008CBA;} /* Blue */
#frm{  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background:#ffffd5;  
    padding: 50px;  
}

</style>

	<title>MPTI</title>
</head>

<body>
	<style>
body {
  background-image: url('e.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
	<center>
		
		<h1 >Muthayammal Polytechnic Institution</h1>
		<hr>
		<h2> CSE DEPARTMENT FESTIVEL</h2>
		<hr>
		</center>
		<form action="loginsert.php" method="post">
			<div id = "frm">  
			<p>
				<label for="email">Username:</label>
				<input type="text" name="email" id="email">
			</p>


			
			<p>
				<label for="pnum">password:</label>
				<input type="password" name="pnum" id="pnum">
			</p>
			<button class="button button2">Sign</button>
			<div>

		</form>
	</center>
</body>

</html>
