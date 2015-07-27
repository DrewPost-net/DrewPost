<?php
require_once("./include/membersite_config.php");
if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
}
$file_upload="true";

$file_up_size= $_FILES['file_up'][size];
if ($_FILES[file_up][size]>20000000){
$msg=$msg."Your uploaded file size is more than 20MB so please reduce the file size and then upload.<BR>";
$file_upload="false";
}

//if (!($_FILES[file_up][type] == "image/jpeg" OR $_FILES[file_up][type] =="image/gif" OR  $_FILES[file_up][type] == "image/png")){
//$msg=$msg."Your uploaded file must be of JPG, PNG, or GIF. Other file types are not allowed<BR>";
//$file_upload="false";
//}


$p1 = md5($user);
$p2 = md5($_FILES[file_up][name]);
$file_name=$p1.$p2;
$add="upload/$file_name"; // the path with the file name where the file will be stored

if($file_upload=="true"){



if(move_uploaded_file ($_FILES[file_up][tmp_name], $add)){
$djg1117 = $fgmembersite->UserID($fgmembersite->UserEmail());

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE users SET profile_picture='$file_name' WHERE id_user=$djg1117";

if ($conn->query($sql) === TRUE) {
    header("Location: settings.php?err=0");
} else {
    echo "Error updating profile picture  : ( " . $conn->error . " )";
}

$conn->close();
}
}
?>