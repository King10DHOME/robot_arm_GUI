<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (!empty($_POST["Firstname"])&&!empty($_POST["lastname"])) {
		$x=$_POST['Firstname'];
		$y=$_POST['lastname'];
		$sql = "INSERT INTO user (fname,lname) VALUES ('$x','$y')";
		} 
	}
$servername = "localhost";
$username = "root";
$password = "";
$dbname="db1";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection

if ($conn->connect_error) {
	die("Connection failed " . $conn->connect_error);

}
echo "Connected successfully";

if ($conn->query($sql) === TRUE) {

echo "New record created successfully";


} else {

	echo "Error:" . $sql . "<br>" . $conn->error;
}


$conn->close();

?>