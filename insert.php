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

//list of variables needed for register

$nam e= $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phoneNo = $_POST['phoneNo'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$rank = $_POST['rank'];
$user_name = $_POST["username"];
$user_pass = $_POST["password"];
//$name, $surname, $email, $phoneNo, $address1, $address2, $rank, $user_name, $user_pass
//'Timmy', 'Brown', 'tbrown@gmail.com', '0877854285', '22 Tuar na blatha' ,'Waterford', 'Recruit', 'tBrown22', 'brown'
$sql = "INSERT INTO users (name, surname, email, phoneNo, address1, address2, militaryRank, username, password)
VALUES ('$name', '$surname', '$email', '$phoneNo', '$address1', '$address2', '$rank', '$user_name', '$user_pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
