<?php
 require_once("./include/membersite_config.php");
 	$site = $_POST['site'];
	$login_success = $_POST['login_success'];
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        if(!isset($_SESSION)){ session_start(); }
        if(! $fgmembersite->CheckLoginInDB($username,$password))
        {
            if($_POST['sender'] != "iOS"){
            include("err_top.tpl");
            echo"Invalid Username or Password";
            include("err_bottom.tpl");
            }
        }
        else{
        $_SESSION[ $fgmembersite->GetLoginSessionVar()] = $username;
  	      if($_POST['sender'] != "iOS"){
  	      setcookie('email', $fgmembersite->UserEmail(), time() + 3600, '/', '.drewpost.net');
  	      if(!isset($_POST['site'])){
        header("location:./home");
        }
        if(isset($_POST['site'])){
        echo $site;
              setcookie('user_email', $fgmembersite->UserEmail(), time() + 3600, '/', ".".$site);
  	      setcookie('user_id', $fgmembersite->UserID($fgmembersite->UserEmail()), time() + 3600, '/', ".".$site);
  	      setcookie('user_full_name', $fgmembersite->UserFullName(), time() + 3600, '/', ".".$site);
  	      setcookie('user_username', $fgmembersite->UserName($fgmembersite->UserEmail()), time() + 3600, '/', ".".$site);
  	    //  header("Location: $login_success");
        }
        }
        //echo "1";
        }
        
?>