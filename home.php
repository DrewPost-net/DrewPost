<?PHP
require_once("./include/membersite_config.php");
$user_full_name = NULL;
if(!$fgmembersite->CheckLogin()){
$fgmembersite->RedirectToURL("index.php");
exit;
}
else{
$ses = $fgmembersite->UserID($fgmembersite->UserEmail()); //tell freichat the userid of the current user

    setcookie("freichat_user", "LOGGED_IN", time()+3600, "/"); // *do not change -> freichat code
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      DrewPost| Home
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
<div class='col-md-4'><center><h3>QuickNav</h3><h4><a href='./drew'><font color='#3366CC'>Drew Graham</font></a><br><a href='./deathdude500'><font color='#3366CC'>Justin Prough</font></a></h4><p>This new menu will<br>have some use<br>but I am not sure <br>what it is yet.<br>if you have any<br>suggestions</br>email me<br> at <a href='mailto:d2@drewjgraham.com'>d2@<br>drewj<br>graham.com</a></center></div>
<div class='col-md-4'>
            <div class='input'>
              <form method="post" action='post.php'>
               <div align='left'> <font color='#3366CC'><h4> 
                
                <img src='<?php
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
$uid = $fgmembersite->UserID($fgmembersite->UserEmail());
$sql = "SELECT * FROM users WHERE id_user='$uid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['profile_picture'];
    }
} else {
    echo "error";
}
$conn->close();
?>' class='profile_picture' height='50'>
                <?php echo $fgmembersite->
UserFullName(); ?></h4></font></div>
                <textarea placeholder="Say something AWESOME!" style="color: #3399FF; background-color: transparent; text-align:center; width:100%; height: 75%;" name='post' '></textarea>
<div align='right'><input type='submit' class='btn btn-primary' value='Post'></form>
</div>
<div class='col-md-4'></div>
</div>

<script src="ajax.js"></script>
<script type="text/javascript"><!--
refreshdiv();
// --></script>
<div id='posts'></div>
      
        <br>
               
    <center>
      &copy 2013-2015 
      <a href='//drewjgraham.com'>Drew Graham</a> and <a href='//deathdude500.at.ua'>Justin Prough</a>
    </center>
    </div><div class='col-md-4'><center><h3>News</h3><p>Soon</p></center></div>
    </html>