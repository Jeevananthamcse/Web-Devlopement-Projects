<!DOCTYPE html>
<html lang="en">

<head>


	<title>MPTI</title>
</head>

<body>
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
#btn{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 36%;  
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
#btn{  
    color: #fff;  
    background:green;  
    padding: 7px;  
    margin-left: 36%;  
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
		<a href="homeadmin.php">HOME</a>
		<hr>
		<?php
		 $regval= $_GET['edit'];
		
		?>
		<center>
		<div #text-position >
		<form action="updates.php" method="post">
			<div id = "frm">  
			<h2 style="color:Tomato;">STUDENT DETAILS REGISTERATION FORM </h2>
							&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
			<h3>
			
			<p>
				<label for="Regno">Register Number:</label>
				
				<input type="text" name="regno" id="Regno"  required value="<?php echo $regval; ?>" regno>
				
							<p>
				<label for="mark1">Mark:</label>
				&nbsp;
					&nbsp;
						&nbsp;
					
				
				<input width="4px" type="text" name="mark1" id="mark1"  required>
				



			
			     
                <input type =  "submit" id = "btn" value = "submit" />  
				
           
	
			</div>
		</form>
	</center>
</body>

</html>

