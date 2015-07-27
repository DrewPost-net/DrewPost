<?php
// copy file content into a string var
$json_file = file_get_contents('api/api.php?key=HM832W&func=getPostsLimit15');

// convert the string to a json object
$jfo = json_decode($json_file);
// copy the posts array to a php var
$posts = $jfo;
?>

<?php
foreach ($posts as $post) {
?>
<div class='post'>
<h4>
<a href='./<?php echo $post->username; ?>' style='color: #3366CC;'> <img src='<?php
$servername = "localhost";
$username = "drewj_java";
$password = "graham";
$dbname = "drewj_java";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$uid = $post->uid;
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
?>' class='profile_picture' width='50' height='50'>
                  <?php echo $post->user; ?>
                </a>
              </h4>
             <center> <font color='#3399FF'>
             <p>     <?php echo $post->post; ?> </p><font size='0.5'><?php echo $post->date; ?></font>
              </font></center>
              <br>
</div>
<?php } ?>