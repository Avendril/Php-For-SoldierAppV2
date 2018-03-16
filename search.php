<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "soldierapp";
//https://www.w3schools.com/php/php_mysql_insert.asp
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//list of variables required for a delete by name
$ID= $_POST['id'];

if(!empty($ID)){
  $sql = "SELECT id FROM users WHERE id = '$ID'";
}else{
  echo "Please enter an ID";
}

if ($conn->query($sql) === TRUE) {
    echo "Found";
} else {
    echo "Not Found";
}

$conn->close();
?>
