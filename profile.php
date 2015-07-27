<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}
$user = $_GET['user'];

if($user == "all"){
$fgmembersite->RedirectToURL("home_all.php");
exit;
}
if($user == "home"){
$fgmembersite->RedirectToURL("home.php");
exit;
}
if($user == "logout"){
$fgmembersite->RedirectToURL("logout.php");
exit;
}
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

$sql = "SELECT * FROM users WHERE username = '$user' ORDER BY id_user DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $uid = $row['id_user'];
        $user_full_name = $row['name'];
        $profile_picture = $row['profile_picture'];
    }
} 
else {
include("err_top.tpl");
echo "Unknown User";
include("err_bottom.tpl");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      DrewPost| Index 
    </title>
    <!-- Twitter Bootstrap Stylesheet -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/cosmo/bootstrap.min.css">
  <style>
@import url(http://nicholastodor.com/sf/usesf.css);  
    p{
    word-wrap: break-word;
    }    
      .profile_picture{
      border-radius: 50%;
      height: 50;
      width: 50;
     }
      nav{
        background:#3366CC;
      }
      .post{
		-moz-border-radius:16px;
		-webkit-border-radius:16px;
		border-radius:16px;
        padding:20px;
        margin:auto;
        width:100%;
  
        background-color:#E4E2E6;
        
        
        font-weight:bold;
        margin-top:20px;
        
      }
    .input{
		-moz-border-radius:16px;
		-webkit-border-radius:16px;
		border-radius:16px;
        padding:20px;
        margin:auto;
        width:100%;
  
        background-color:#E4E2E6;
        
        text-align:center;
        font-weight:bold;
        margin-top:20px;
        
      }
      .icon-bar{
        background:#3366CC;
      }
      body{
        font-family: 'San Francisco Display', sans-serif;;
        background-color:#F8F8FF;
      }
      navbar-collapse{
        background:#3366CC;
      }
      .active{
        background:#3366CC;
      }
      .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      font-family: 'San Francisco Text', sans-serif;
      }
      .form-signin .checkbox {
        font-weight: normal;
      }
      .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    textarea{
    height: 25px;
    border:0;
    resize: none;
    }
    .header-logo img{height:50px;width:50px;border-radius:50%;}
    </style>
  </head>
  <body>
     <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">
              Toggle navigation
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
          </button>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
    <span class='header-logo'><img src='drewpost_logo.png' class='profile_picture' height='35'> &nbsp <font color='#3399FF'>DrewPost</font><font color='red' size='1'><i>&nbspBETA</i></font></span>
      
           <ul class="nav navbar-nav">
          </ul>
         <ul class="nav navbar-nav navbar-right">
            <li><a href="settings.php"><font color='#3399FF'>Settings</font></a></li>
            <li><a href="./logout"><font color='#3399FF'>Logout</font></a></li>
      

          </ul>
     
          </div>
        </nav>
        <div class='row'>
<div class='col-md-4'></div>
			
<div class='col-md-4'>
<h1><font color='#3366CC'><img class='profile_picture' height='100' width='100' src='<?php echo $profile_picture; ?>' > <?php echo $user_full_name;?></font></h1>
<?php
if($user == "drew"){
?>
<p>Hi, I am Drew Graham! I am a web developer and creator of DrewPost.net<br> Oklahoma, USA</p>
<?php
}
if($user == "deathdude500"){
?>
<p>Hi, I am Justin Prough. I help <a href='./drew'>Drew Graham</a> with developing DrewPost.net<br> Oklahoma, USA</p>
<?php
}
?><br>
<?php
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

$sql = "SELECT * FROM posts WHERE uid = '$uid' ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
        <div class='post'><div align='left'><h4><img class='profile_picture' height='50' width='50' src='<?php echo $profile_picture; ?>' ><font color='#3366CC'><?php echo $row['user'];?></font></h4></div><p><font color='#3399FF'><?php echo $row['post']; ?></font></p></div>
        
        <?php $user_full_name = $row['user'];
 }
} else {
    echo "<div class='post'><font color='#3366CC'>No Posts :(</font></div>";
}
$conn->close();
?>
</center></div><div class='col-md-4'></div></div>
<br>
    <center>
      &copy 2013-2015 
      <a href='//drewjgraham.com'>
        Drew Graham</a> and <a href='//deathdude500.at.ua/'>Justin Prough</a>
      | All Rights Reserved
    </center>
</div>
</html>