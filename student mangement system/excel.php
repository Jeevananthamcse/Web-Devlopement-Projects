<?php
if(isset($_POST["submit"]))
{


          $conn = mysqli_connect("localhost", "root", "", "student");
          if(!$conn){
          die('Could not Connect My Sql:' .mysqli_error());
		  }
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          $c = 0;
          while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                    {
						
						
          $regno= $filesop[0];
          $rollno= $filesop[1];
          $first_name= $filesop[2];
		  
          $last_name= $filesop[3];
          $fname= $filesop[4];
          $mname= $filesop[5];
		  $gender= $filesop[6];
          $age= $filesop[7];
          $dname= $filesop[8];
          $pnum= $filesop[9];
          $address= $filesop[10];
          $email= $filesop[11];
          $mark1= $filesop[12];
          $mark2= $filesop[13];
          $mark3= $filesop[14];
          $mark4= $filesop[15];
          $mark5= $filesop[16];
		  

          $sql = "INSERT INTO student(regno,rollno,first_name,last_name,fname,mname,gender,age,dname,pnum,address,email,mark1,mark2,mark3,mark4,mark5) VALUES ('$regno','$rollno','$first_name',
			'$last_name','$fname','$mname','$gender','$age','$dname','$pnum','$address','$email','$mark1','$mark2','$mark3',
			'$mark4','$mark5')";
          $stmt = mysqli_prepare($conn,$sql);
          mysqli_stmt_execute($stmt);

         $c = $c + 1;
           }

            if($sql){
               echo "success";
             } 
		 else
		 {
            echo "Sorry! Unable to impo.";
          }

}
?>
<!DOCTYPE html>
<html>
<body>
<form enctype="multipart/form-data" method="post" role="form">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file" size="150">
        <p class="help-block">Only Excel/CSV File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
</form>
</body>
</html>