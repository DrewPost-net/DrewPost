<?PHP
ini_set('session.cookie_domain', '.drewpost.net' );
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    //exit;
}
else{
header("location: home.php");
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
             <form class="navbar-form" action="login.php" method="post">
            <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
            
            <button class="btn btn-sm btn-primary" type="submit">
              Login
            </button>
          </form>
           
          </div>
        </nav>
<div class="row">
          <div class="col-md-6">
          </p>
<center><h2>Welcome to DrewPost</h2><p>To get started either create an new account or login to your existing account!</p>
          
        </center>
        </div>
        <div class="col-md-6">
          
          <form class="form-signin" action="register.php" method="post">
            <h2 class="form-signin-heading">
             Create an Account
            </h2>
            <label for="inputEmail" class="sr-only">
              Email address
            </label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
            <input type="text" id="inputEmail" name="name" class="form-control" placeholder="Full Name" required>
            <input type="text" id="inputEmail" name="username"class="form-control" placeholder="Username" required>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">
              Register
            </button>
          </form>
         <!-- <center>
            By clicking Register are are hereby agreeing
            <br>
            to not use bad language, bully, bring others down,
            <br>
            use to sell/buy illegal products/goods. (drugs. guns, ect)
            <br>
            If you do any of these your account will be terminated. 
            <br>
            <br>-->
          </center>
        </div>
        
        <!-- /container -->
    </div>
    <center>
      &copy 2013-2015 
      <a href='//drewjgraham.com'>
        Drew Graham</a> and <a href='http://deathdude500.at.ua/'>Justin Prough</a>
      | All Rights Reserved
    </center>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
  </script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js">
  </script>