<?php
// Include the database configuration file
include 'config.php';
$statusMsg = '';
$backlink = ' <a href="./">Go back</a>';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["but_upload"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array("mp4","avi","3gp","mov","mpeg");
    if (!file_exists($targetFilePath)) {
        if(in_array($fileType, $allowTypes)){
                // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $insert = $con->query("INSERT into videos (file_name, uploaded_on,des) VALUES ('".$fileName."', NOW(),'".$des."')");
                if($insert){
                    $statusMsg = "The file <b>".$fileName. "</b> has been uploaded successfully." . $backlink;
                }else{
                    $statusMsg = "File upload failed, please try again." . $backlink;
                } 
            }else{
                $statusMsg = "Sorry, there was an error uploading your file." . $backlink;
            }
        }else{
            $statusMsg = "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload." . $backlink;
        }
    }else{
            $statusMsg = "The file <b>".$fileName. "</b> is already exist." . $backlink;
        }
}else{
    $statusMsg = 'Please select a file to upload.' . $backlink;
}

// Display status message
echo $statusMsg;
?>