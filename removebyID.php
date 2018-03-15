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
  $sql = "DELETE FROM users WHERE id like '$ID'";
}else{
  echo "Please enter the ID of the user you want to remove";
}

if ($conn->query($sql) === TRUE) {
    echo "User has been removed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
