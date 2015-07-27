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
      DrewPost| Index 
    </title>
    <!-- Twitter Bootstrap Stylesheet -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
@import url(http://nicholastodor.com/sf/usesf.css);      
   .nav{        background:#3366CC;
      }
      .navbar-default{
        background:#3366CC;
      }
      .profile_picture{
      border-radius: 50px;
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
      #navbar{
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
    border:0;
    resize: none;
    }
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
          <ul class="nav navbar-nav">
            <a class="navbar-brand" href="#">
              <font color='#3399FF'>DrewPost</font><font color='red' size='1'><i>&nbspBETA</i></font>
            </a>
         <li><a href='home.php'><font color='#3399FF'>Home</font></a></li>
          </ul>
         <ul class="nav navbar-nav navbar-right">

            <li><a href="./logout"><font color='#3399FF'>Logout</font></a></li>
      

          </ul>
     
          </div>
        </nav>
  <div class='row'><div class='col-md-4'></div><div class='col-md-4'>
<center><h4>Settings</h4><h5>Profile Picture:</h5><?php if($_GET['err'] == "0"){echo "<font color='green'> Success! Your profile picture has been updated!</font>";}?>
<form action='profile_picture.php' method='post' enctype="multipart/form-data"><input type='file' name='file_up'>
<input type='submit' value='Update'>
</form></center>


</div><div class='col-md-4'></div></div>
    <center>
      &copy 2013-2015 
      <a href='//drewjgraham.com'>
        Drew Graham</a> and <a href='http://deathdude500.at.ua/'>Justin Prough</a>
      | All Rights Reserved
    </center>

</html>