<?php
$servername = "localhost";
$db_username = "";
$db_password = "";
$dbname = "";

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$salt = sha1(rand());
$salt = substr($salt, 0, 10);
$encrypted = base64_encode(sha1($password . $salt, true) . $salt);

// Create connection
$conn1 = new mysqli($servername, $db_username, $db_password, $dbname);
// Check connection
if ($conn1->connect_error) {
    include("err_top.tpl");
    die("Connection failed: " . $conn1->connect_error);
    include("err_bottom.tpl");
} 

$sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
$result = $conn1->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        include("err_top.tpl");
        echo "Username already taken";
        include("err_bottom.tpl");
    }
} else {
$sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
$result = $conn1->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        include("err_top.tpl");
        echo "Email already taken";
        include("err_bottom.tpl");
    }
} 
else {
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
$sql = "INSERT INTO users ( name, email, username, salt, password, confirmcode)
VALUES ('$name', '$email', '$username', '$salt', '$encrypted', 'y')";

if ($conn->query($sql) === TRUE) {
    include("err_top.tpl");
    echo"Account Successfully Created!";
    echo"<br><a href='index.php'>Login</a>";
    include("err_botom.tpl");
} else {
    include("err_top.tpl");
    echo "A error has occured creating your user account. :( ";
    include("err_bottom.tpl");
}

$conn->close();
}}
$conn1->close();
?>