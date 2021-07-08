<!doctype html>
<html>
    <head>
        <?php
        include("config.php");
     
        if(isset($_POST['but_upload'])){
            $maxsize = 5242880; // 5MB
                       
            $name = $_FILES['file']['name'];
            $target_dir = "videos/";
            $target_file = $target_dir . $_FILES["file"]["name"];
			$des = $_REQUEST['des'];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                // Check file size
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        // Insert record
                        $query = "INSERT INTO videos(name,location,des) VALUES('".$name."','".$target_file."','".$des."')";

                        mysqli_query($con,$query);
                        echo "Upload successfully.";
                    }
                }

            }else{
                echo "Invalid file extension.";
            }
        
        }
        ?>
    </head>
    <body>

<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
</style>
<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid  #0080ff;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
  width: 300px;
}

input[type=text]:focus {
  border: 1px solid #00e6e6;
}
</style>
			<input type="image" src="ztube.jpg" href="readvideos.php" width="200px" height="100px">
		<hr>
		<center>
        <form method="post" action="" enctype='multipart/form-data'>
            <input type='file'  name='file' />
			<br>
			<br>
			                <label for="des">description</label>  
					&nbsp;
						&nbsp;
                <input type = "text" id ="des" name  = "des"  required  /> 
				 <input type='submit' class="button button2" value='Upload' name='but_upload'>

        </form>

    </body>
</html>
