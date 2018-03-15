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
//list of variables required for update method, they can be left empty
$ID= $_POST['id']; //'1';//
$name= $_POST['name']; //'';//
$surname = $_POST['surname']; //'';//
$email = $_POST['email']; //'';//
$phoneNo = $_POST['phoneNo']; //'';//
$address1 = $_POST['address1']; //'';//
$address2 = $_POST['address2']; //'';//
$rank = $_POST['rank']; //'General';//
$user_name = $_POST["username"]; //'Bartek';//
$user_pass = $_POST["password"]; //'Sunrise1997';

if(!empty($name)){
  $sql = "UPDATE users SET name = '$name' WHERE id = '$ID'";

  if($conn->query($sql) === TRUE) {
      echo "User's name has been updated";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if(!empty($surname)){
  $sql = "UPDATE users SET surname = '$surname' WHERE id = '$ID'";

  if ($conn->query($sql) === TRUE) {
      echo "User's surname has been updated";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if(!empty($email)){
  $sql = "UPDATE users SET email = '$email' WHERE id = '$ID'";

  if ($conn->query($sql) === TRUE) {
      echo "User's email has been updated";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if(!empty($phoneNo)){
  $sql = "UPDATE users SET phoneNo = '$phoneNo' WHERE id = '$ID'";

  if ($conn->query($sql) === TRUE) {
      echo "User's Phone Number has been updated";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if(!empty($address1)){
  $sql = "UPDATE users SET address1 = '$address1' WHERE id = '$ID'";

  if ($conn->query($sql) === TRUE) {
      echo "User's address line 1 has been updated";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if(!empty($address2)){
  $sql = "UPDATE users SET address2 = '$address2' WHERE id = '$ID'";

  if ($conn->query($sql) === TRUE) {
      echo "User's address line 2 has been updated";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if(!empty($rank)){
  $sql = "UPDATE users SET militaryRank = '$rank' WHERE id = '$ID'";

  if ($conn->query($sql) === TRUE) {
      echo "User's rank has been updated";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if(!empty($user_name)){
  $sql = "UPDATE users SET username = '$user_name' WHERE id = '$ID'";

  if ($conn->query($sql) === TRUE) {
      echo "User's username has been updated";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if(!empty($user_pass)){
  $sql = "UPDATE users SET password = '$user_pass' WHERE id = '$ID'";

  if ($conn->query($sql) === TRUE) {
      echo "User's password has been updated";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
