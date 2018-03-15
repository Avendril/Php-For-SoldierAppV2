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
$name= $_POST['name'];
$surname = $_POST['surname'];

if(!empty($name) && !empty($surname)){
  $sql = "DELETE FROM users WHERE name like '$name' and surname like '$surname'";
}else if (!empty($name) || !empty($surname)){
  echo "Please enter both name and surname";
}else{
  echo "Something went wrong, ups!";
}

if ($conn->query($sql) === TRUE) {
    echo "User has been removed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
