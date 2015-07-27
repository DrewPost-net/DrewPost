<?php
require("api_functions.php");
require("api_secure.php");

$key = $_GET['key'];
$func = $_GET['func'];
if(in_array($key, $keys) != TRUE && $func != "apiLogin"){
echo "Invalid API Key";
} 
else{
if($func == ""){
echo "No API Function Specified";
}
if($func == "getAllPosts"){
 echo getAllPosts();
}
else if($func == "getUserAccntData"){
 echo getUserAccntData();
}
else if($func == "getCurrentUser"){
echo getCurrentUser();
}
else if($func == "getPostsLimit15"){
echo getPostsLimit15();
}
else{
echo "Unknown API Function";
}

}
?>