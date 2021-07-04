<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

$servo1 = $_POST['servo1'];
$servo2 = $_POST['servo2'];
$servo3 = $_POST['servo3'];
$servo4 = $_POST['servo4'];
$servo5 = $_POST['servo5'];
$servo6 = $_POST['servo6'];




// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (servo1, servo2, servo3, servo4, servo5, servo6)
VALUES ('$servo1', '$servo2', '$servo3', '$servo4','$servo5','$servo6')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

