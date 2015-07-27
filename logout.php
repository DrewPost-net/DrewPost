<?PHP
require_once("./include/membersite_config.php");
setcookie('email', "", time() - 3600, '/', '.drewpost.net');
$fgmembersite->LogOut();
header("location: ./");
?>