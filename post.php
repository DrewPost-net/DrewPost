<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
}
?>
<?php
$servername = "localhost";
$db_username = "";
$db_password = "";
$dbname = "";

$post = strip_tags($_POST['post']);
if($post != ""){
// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 date_default_timezone_set('America/Chicago');
 $date = date('M d, Y  h:i');

$post_safe = mysqli_real_escape_string($conn, $post);
//$post_safe = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO posts (post, user, uid, username, date)
VALUES ('$post_safe', '".$fgmembersite->UserFullName()."', '".$fgmembersite->UserID($fgmembersite->UserEmail())."', '".$fgmembersite->UserName($fgmembersite->UserEmail())."', '$date')";

if ($conn->query($sql) === TRUE) {
    header("location: home.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
else{
include("err_top.tpl");
echo "Posts must not be empty";
include("err_bottom.tpl");
}
?>