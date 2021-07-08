<!DOCTYPE html>
<html lang="en">

<head>


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
#frm{  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: white;  
    padding: 50px;  
}  

</style>
<style>
a:link, a:visited {
  background-color: DodgerBlue;
  color: white;
  padding: 8px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: Tomato;
}
</style>
	<center>
		
		<h1 >Muthayammal Polytechnic Institution</h1>
		<hr>
		<h2> CSE DEPARTMENT FESTIVEL</h2>
		<hr>
		</center>
						&nbsp;
				&nbsp;
					&nbsp;
		<font face="cinzel" size="3">
		<a href="home.php">HOME</a>
		<hr>
		<center>
		<form action="insert.php" method="post">
			<div id = "frm">  
			<h2 style="color:Tomato;">REGITERATION FORM </h2>
							&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
			<h3>
			<p>
				<label for="firstName">First Name:</label>
				&nbsp;
					&nbsp;
				
				<input type="text" name="first_name" id="firstName"  required>
			</p>


			
			<p>
				<label for="lastName">Last Name:</label>
				&nbsp;
					&nbsp;
					
				<input type="text" name="last_name" id="lastName"  required>
			</p>


			
			<p>
				<label for="Gender">Gender:</label>
				&nbsp;
					&nbsp;
						&nbsp;
							&nbsp;
				<input type="text" name="gender" id="Gender" required >
			</p>
			<p>
				<label for="Cname">Collage Name</label>
	
	
				<input type="text" name="cname" id="Cname"  required>
			</p>
			<p>
				<label for="Ename">Event name:</label>
				<input type="text" name="ename" id="Ename"  required>
			</p>
			<p>
				<label for="Pnum">Phone number : </label>
				<input type="text" name="pnum" id="Pnum"  required>
			</p>


			
			
			<p>
				<label for="Address">Address:</label>
				&nbsp;
					&nbsp;
						&nbsp;
					&nbsp;
				<input type="text" name="address" id="Address"  required>
			</p>

			
			
			<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="emailAddress"  required>
			</p>

			
			<input type="submit" value="Submit">
			</div>
		</form>
	</center>
</body>

</html>
