<?php
    include("config.php");
?>

<!doctype html>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */

.tab {
    display: inline-block;
    margin-left: 400000000000000000000px;
}
 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid  gray;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
  width: 300px;
}

input[type=text]:focus {
  border: 2px solid black;
}

input[type=submit]{
  background-color: red;
  border: none;
  color: white;
  padding: 14px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<title>Tech Tube</title> 
	<link rel="icon" href="y.jpg" type="image/gif">
        <style>
            video{
                float: left;
            }
        </style>
    </head>

<img href="studio.php" src="ztube.gif" width="200" height="100">

</p>
<center>

	<div class="container">

<form action="search.php" method="GET">
<input type="text" placeholder="search anything" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
</div>
<span class="tab"></span>
		
	<a href="studio.php" target="_blank">Studio</a>
	</center>
<hr>	


        <div>
          
        <?php
        $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $location = $row['location'];
			$des = $row['des'];
   
   
       echo "<div style='float: left; margin-right: 5px;'>
          <video src='".$location."' controls width='320px' height='200px' ></video>   
          <br>
          
		  <h4><span>".$des."</span><h4>
       </div>";
			
 }
        ?>
        

		<br>
	
		
        </div>

    </body>
</html>
