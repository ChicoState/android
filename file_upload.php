<!DOCTYPE html>
<html>
<style>
header {
background-color:black;
color:white;
text-align:center;
padding:5px;	
}
</style>
<body>
<header>
<h2>File Upload</h2>
</header>
<center>
<?php
$target_dir = "uploads/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

//Sanitize inputs
if (isset($_POST["submit"])) 
{
    $safe_name = addslashes ($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . basename($safe_name);
}
else
{
        die("submission failed");
}

// Check if file already exists
if (file_exists($target_file)) 
{
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}

//get file size
$filesize = $_FILES["fileToUpload"]["size"];
echo "File size " . $filesize . "<br>";

 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
 {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
 } 
 else 
 {
        echo "Sorry, there was an error uploading your file.";
 }

?> 

<a href="http://localhost/grouphomepage.html">Go to Group Home page</a>
</center>
</body>
</html>
